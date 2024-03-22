<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\QueryConstant;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Models\ModuleModel;

class Module extends Controller implements MemoryAdmin
{
    public function index(Request $req){

    }
    public function create(Request $request){
        try{
            $data = $request->only(['name', 'icon', 'parentid', 'alias', 'sort']);
            $alias = $data['alias'];
        
            $existingAlias = ModuleModel::where('alias', $alias)->first();
        
            if ($existingAlias) {
                return response()->json(['result' => false, 'errors' => ['msg' => ['Alias đã tồn tại trong cơ sở dữ liệu']]]); // Trả về thông báo lỗi nếu alias đã tồn tại
            }
            $data['id'] = ModuleModel::max('id') + 1;
            $data['sort'] = ModuleModel::max('id') + 1;

            ModuleModel::create($data);
        
            return response()->json(['result' => true, 'data' => ['msg' => 'Thêm thành công']]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
    public function get(Request $req){
        try{
            $id = $req->input('id');
            $data = ModuleModel::where('id',$id)->get();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function getAll(Request $req){
        try{
            $data = ModuleModel::orderBy('sort', 'asc')->get();
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
    
        $data = $req->only('parentid', 'name', 'alias', 'icon');
    
        try {
            $module = ModuleModel::find($id);
    
            if (!$module) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy module']]);
            }
    
            $module->update($data);
            $newData = ModuleModel::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }   
    public function delete(Request $req){
        if( empty($req->input('id')))
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]); 
        try{
           ModuleModel::where('id', $req->input('id'))->delete( $req->input('id') );
                return response()->json(['result' => true, 'data' => [], 'msg' => 'Xóa thành công' ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function changeStatus(Request $req){
        try{
            $data = [];
            if(empty(($req->input('id')))) return response()->json(['result' =>true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            if ($req->has('sort')) {
                $data['sort'] = $req->input('sort');
            }
            if ($req->has('publish')) {
                $data['publish'] = $req->input('puslish');
            }
            if( empty($data) ) 
                return response()->json(['result' => true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            
                ModuleModel::where('id', $req->input('id'))->update($data);
                return response()->json(['result' => true, 'msg' => 'Cập nhật thành công']);
        }catch(\Exception $e){
        return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
}