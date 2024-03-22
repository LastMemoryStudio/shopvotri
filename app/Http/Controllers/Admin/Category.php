<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Admin\MemoryAdmin;

use Illuminate\Http\Request;

use App\Models\CategoryModel;
use App\Constants\QueryConstant;

class Category implements MemoryAdmin
{
    public function index(Request $req){

    }

    public function create(Request $req){
        try {
            $data = $req->only(['parentid', 'name', 'des', 'home', 'publish', 'sort', 'alias', 'image']);
            $data['id'] = CategoryModel::max('id') + 1;
            $data['sort'] = CategoryModel::max('id') + 1;
    
            $newCategory = new CategoryModel();
            $newCategory->fill($data);
            $newCategory->save();
    
            return response()->json(['result' => true, 'data' => ['msg' => 'Thêm thành công', 'newData' => $newCategory]]);
        } catch(\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
    

    public function get(Request $req){

    }

    public function getAll(Request $req){
        try{
            $data = CategoryModel::orderBy('id', 'desc')->paginate(10);
                return response()->json(['result' => true, 'data' => $data  ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }

    public function update(Request $request) {
        $id = $request->input('id');
    
        if (empty($id)) {
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]);
        }
    
        $data = $request->only('parentid', 'name', 'alias', 'image', 'des');
    
        try {
            $category = CategoryModel::find($id);
    
            if (!$category) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy danh mục']]);
            }
    
            $category->update($data);
            $newData = CategoryModel::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
    

    public function delete(Request $req){
        if( empty($req->input('id')))
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]); 
        try{
            $data = CategoryModel::where('id', $req->input('id'))->delete( $req->input('id') );
                return response()->json(['result' => true, 'data' => [], 'msg' => 'Xóa thành công' ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    
    public function changeStatus(Request $req){
        try{
            $data = [];
            if( empty( $req->input('id') ) ) return response()->json(['result' => true, 'msg' => 'Không có truy vấn vào được thực hiện']);
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
            if( empty($data) ) 
                return response()->json(['result' => true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            
            CategoryModel::where('id', $req->input('id'))->update($data);

                return response()->json(['result' => true, 'msg' => 'Cập nhật thành công']);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
}