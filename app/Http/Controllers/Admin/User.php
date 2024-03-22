<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\QueryConstant;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Models\User as UserModels;

class User extends Controller implements MemoryAdmin
{
    public function index(Request $req){

    }
    public function create(Request $req){
        try {
            $data = $req->only(['name', 'phone', 'email', 'password','remeber_token']);
            $data['id'] = UserModels::max('id') + 1;
    
            $newData = new UserModels();
            $newData->fill($data);
            $newData->save();
    
            return response()->json(['result' => true, 'data' => $newData]);
        } catch(\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function get(Request $req){
        try{
            $id = $req->input('id');
            $data = UserModels::where('id',$id)->get();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function getAll(Request $req){
        try{
            $data = UserModels::orderBy('id', 'desc')->paginate(10);
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
            $user = UserModels::find($id);
    
            if (!$user) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy module']]);
            }
    
            $user->update($data);
            $newData = UserModels::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function delete(Request $req){
        if( empty($req->input('id')))
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]); 
        try{
            $data = UserModels::delete( $req->input('id') );
                return response()->json(['result' => true, 'data' => [], 'msg' => 'Xóa thành công' ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
}
