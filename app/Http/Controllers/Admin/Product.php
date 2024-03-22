<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Models\AliasModel;
use App\Models\ProductModel;
use App\Constants\QueryConstant;

class Product extends Controller implements MemoryAdmin
{
    protected $aliasType = 3;
    public function index(Request $req){

    }
    public function create(Request $req)
    {
        $id = ProductModel::max('id') + 1;

        $data = [];
        $data = $req->only('name', 'cateid', 'alias', 'type', 'image', 'des', 'content', 'properity', 'qty', 'price', 'price_sale');
        $data['id']         = $id;
        $data['sort']       = $id;

        try{
            $newCategory = ProductModel::create($data);
            AliasModel::create([
                'type' => $this->aliasType,
                'alias' => $req->input('alias')
            ]);

            if($newCategory)
                return response()->json(['result' => true, ProductModel::where('id', $id)->get() ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function get(Request $req)
    {
        try{
            $id = $req->input('id');
            $data = ProductModel::where('id',$id)->get();
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function getAll(Request $req)
    {
        try{
            $data = ProductModel::orderBy('id', 'desc')->paginate(10);
            return response()->json(['result' => true, 'data' => $data ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function update(Request $req)
    {
        $id = $req->input('id');
    
        if (empty($id)) {
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]);
        }
    
        $data = $req->only('name', 'cateid', 'alias', 'type', 'image', 'des', 'content', 'properity', 'qty', 'price', 'price_sale');
        try {
            $product = ProductModel::find($id);
            try{
                AliasModel::where('type', $this->aliasType )->where('alias', $product['alias'])->update([
                    'alias' => $req->input('alias')
                ]);
            }catch(\Exception $e){
                return response()->json(['result' => false, 'errors' => ['product' => $product , 'err' => $e ]]);
            }
    
            if (!$product) {
                return response()->json(['result' => false, 'errors' => ['msg' => 'Không tìm thấy sản phẩm']]);
            }
    
            $product->update($data);
            $newData = ProductModel::find($id);
    
            return response()->json(['result' => true, 'data' => ['newData' => $newData, 'msg' => 'Cập nhật thành công']]);
        } catch (\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }
    public function delete(Request $req)
    {
        if( empty($req->input('id')))
            return response()->json(['result' => false, 'errors' => ['msg' => 'Id là bắt buộc']]); 
        try{
            $product = ProductModel::find($req->input('id'));
            AliasModel::where('alias', $product['alias'])->delete();
            ProductModel::where('id', $req->input('id'))->delete();
                return response()->json(['result' => true, 'data' => [], 'msg' => 'Xóa thành công' ]);
        }catch(\Exception $e){
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }
    public function changeStatus(Request $req){
        try{
            $data = [];
            if(empty(($req->input('id')))) return response()->json(['result' =>true, 'msg' => 'Không có truy vấn vào được thực hiện']);
            if ($req->has('status')) {
                $data['status'] = $req->input('status');
            }
            if ($req->has('hot')) {
                $data['hot'] = $req->input('hot');
            }
            if ($req->has('sort')) {
                $data['sort'] = $req->input('sort');
            }
            if ($req->has('publish')) {
                $data['publish'] = $req->input('publish');
            }
            if( empty($data) ) 
                return response()->json(['result' => false, 'msg' => 'Không có truy vấn vào được thực hiện']);
            
            ProductModel::where('id', $req->input('id'))->update($data);
                return response()->json(['result' => true, 'msg' => 'Cập nhật thành công']);
        }catch(\Exception $e){
        return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL]]);
        }
    }

}
