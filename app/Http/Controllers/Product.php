<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\SlideModel;
use Illuminate\Database\QueryException;

class Product extends Controller
{
    public function index($alias){
        try{
            $data['productDetail'] = ProductModel::where('alias',$alias)->first();
            if($data['productDetail'] == null){
                abort(404);
            }else{
                $data['productDetail']->toArray();
            }
    
            $data['product'] = ProductModel::select('tbl_products.name', 'tbl_products.alias', 'tbl_products.sort', 'tbl_products.id', 'tbl_products.image', 'tbl_products.price', 'tbl_products.price_sale', 'tbl_products.qty', 'tbl_category.name as cate_name')
            ->join('tbl_category', 'tbl_products.cateid', '=', 'tbl_category.id')
            ->where('tbl_products.hot', 1)
            ->where('tbl_products.publish', 1)
            ->orderBy('sort', 'asc')
            ->paginate(4);
            // dd($data['productDetail']['image']);
    
            $data['image'] = $data['productDetail']['image'];
            $data['title'] = $data['productDetail']['name'];
            $data['description'] = $data['productDetail']['des'];
            $data['template'] = 'detail';
            return view('template',$data);
        }catch(\Exception $e){
            abort(404);
            // return response()->json(['error' => 'An error occurred'], 500);
        }catch(QueryException $e){
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
    public function defaults(){
        $data['product'] = ProductModel::select('tbl_products.name', 'tbl_products.alias', 'tbl_products.sort', 'tbl_products.id', 'tbl_products.image', 'tbl_products.price', 'tbl_products.price_sale', 'tbl_products.qty', 'tbl_category.name as cate_name')
        ->join('tbl_category', 'tbl_products.cateid', '=', 'tbl_category.id')
        ->where('tbl_products.publish', 1)
        ->orderBy('sort', 'asc')
        ->paginate(12);

        $data['category'] = CategoryModel::select('id', 'alias', 'name')->where('publish', 1)
        ->orderBy('sort', 'asc')
        ->get()->toArray();

        $data['slide'] = SlideModel::where('publish',1)
        ->where('type',1)
        ->limit(5)
        ->orderBy('sort', 'asc')
        ->get()->toArray();

        $data['title'] = 'Sản phẩm';
        $data['template'] = 'product';
        return view('template', $data);
    }
}