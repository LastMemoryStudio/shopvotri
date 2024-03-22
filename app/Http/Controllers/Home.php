<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\TradeMarkModel;
use App\Models\SlideModel;


class Home extends Controller
{
    public function index(){
        $data['product'] = ProductModel::select('tbl_products.name', 'tbl_products.alias', 'tbl_products.sort', 'tbl_products.id', 'tbl_products.image', 'tbl_products.price', 'tbl_products.price_sale', 'tbl_products.qty', 'tbl_category.name as cate_name')
        ->join('tbl_category', 'tbl_products.cateid', '=', 'tbl_category.id')
        ->where('tbl_products.hot', 1)
        ->where('tbl_products.publish', 1)
        ->orderBy('sort', 'asc')
        ->paginate(10);

        $data['category'] = CategoryModel::where('publish', 1)
        ->orderBy('sort', 'asc')
        ->limit(8)
        ->get()->toArray();
        // dd($data['category']);

        $data['tradeMark'] = TradeMarkModel::where('publish',1)
        ->limit(18)
        ->get()->toArray();

        $data['slide'] = SlideModel::where('publish',1)
        ->where('type',1)
        ->limit(5)
        ->orderBy('sort', 'asc')
        ->get()->toArray();

        $data['banner'] = SlideModel::where('publish',1)
        ->where('type',2)
        ->limit(5)
        ->orderBy('sort', 'asc')
        ->get()->toArray();

        $data['title'] = 'Trang chủ';
        $data['template']= 'home';
        return view('template', $data);


    }
}
