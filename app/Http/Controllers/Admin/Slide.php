<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Models\SlideModel;
use App\Constants\QueryConstant;

class Slide extends Controller implements MemoryAdmin
{
    public function index(Request $req){

    }
    public function create(Request $req){
        try {
            $data = $req->only(['name', 'type', 'image', 'slide', 'alias']);
            $data['id'] = SlideModel::max('id') + 1;
    
            $newData = new SlideModel();
            $newData->fill($data);
            $newData->save();
    
            return response()->json(['result' => true, 'data' => $newData]);
        } catch(\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
    public function get(Request $req){
        try{
            $id = $req->input('id');
            $data = SlideModel::where('id',$id)->get();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function getAll(Request $req){
        try{
            $data = SlideModel::orderBy('id', 'desc')->paginate(10);
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function update(Request $req){
        $id = $req->input('id');
    
        if (empty($id)) {
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]);
        }
    
            $data = $req->only(['name', 'type', 'image', 'slide', 'alias']);
    
        try {
            $slide = SlideModel::find($id);
    
            if (!$slide) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy module']]);
            }
    
            $slide->update($data);
            $newData = SlideModel::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function delete(Request $req){
        try{
            $id = $req->input('id');
            $data = SlideModel::where('id', $id)->delete();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function changeStatus(Request $req){
        try{
            $data = [];
            if( empty($req->input('id'))) return response()->json(['result' =>true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            if ($req->has('publish')) {
                $data['publish'] = $req->input('publish');
            }
            if ($req->has('hot')) {
                $data['hot'] = $req->input('hot');
            }
            if ($req->has('sort')) {
                $data['sort'] = $req->input('sort');
            }
            if ($req->has('home')) {
                $data['home'] = $req->input('home');
            }
            if ($req->has('type')) {
                $data['type'] = $req->input('type');
            }
            if( empty($data) ) 
                return response()->json(['result' => true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            
            SlideModel::where('id', $req->input('id'))->update($data);
                return response()->json(['result' => true, 'msg' => 'Cập nhật thành công']);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
}
