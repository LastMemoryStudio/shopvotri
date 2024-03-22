<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Models\TradeMarkModel;
use App\Constants\QueryConstant;

class TradeMark extends Controller implements MemoryAdmin
{
    public function index(Request $req){

    }
    public function create(Request $req){
        try {
            $data = $req->only('name', 'alias', 'image', 'des');
            $id = TradeMarkModel::max('id') + 1;
            $data['id'] = $id;
            $data['sort'] = $id;
    
            $newData = new TradeMarkModel();
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
            $data = TradeMarkModel::where('id',$id)->get();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function getAll(Request $req){
        try{
            $data = TradeMarkModel::orderBy('id', 'desc')->paginate(10);
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
    
        $data = $req->only('name', 'alias', 'image', 'des');
    
        try {
            $tradeMark = TradeMarkModel::find($id);
    
            if (!$tradeMark) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy thương hiệu']]);
            }
    
            $tradeMark->update($data);
            $newData = TradeMarkModel::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function delete(Request $req){
        if( empty($req->input('id')))
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]); 
        try{
            TradeMarkModel::where('id', $req->input('id'))->delete( $req->input('id') );
                return response()->json(['result' => true, 'data' => ['msg' => 'Xóa thành công' ]]);
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
                $data['publish'] = $req->input('publish');
            }
            if( empty($data) ) 
                return response()->json(['result' => true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            
                TradeMarkModel::where('id', $req->input('id'))->update($data);
                return response()->json(['result' => true, 'msg' => 'Cập nhật thành công']);
        }catch(\Exception $e){
        return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
}
