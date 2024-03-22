<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Category extends Controller
{
    public function index($alias){
        $data['category'] = CategoryModel::select('name', 'id', 'alias')->where('alias', $alias)->get()->toArray();

        $data['product'] = ProductModel::select('tbl_products.name', 'tbl_products.alias', 'tbl_products.sort', 'tbl_products.id', 'tbl_products.image', 'tbl_products.price', 'tbl_products.price_sale', 'tbl_products.qty', 'tbl_category.name as cate_name')
        ->join('tbl_category', 'tbl_products.cateid', '=', 'tbl_category.id')
        ->where('tbl_products.hot', 1)
        ->where('tbl_products.cateid', $data['category'][0]['id'])
        ->where('tbl_products.publish', 1)
        ->orderBy('sort', 'asc')
        ->limit(10)
        ->get();

        $data['title'] = $data['category'][0]['name'];
        $data['template'] = 'category';
        return view('template',$data);
    }
}
