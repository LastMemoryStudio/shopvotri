<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Category;
use App\Http\Controllers\Product;

use App\Models\AliasModel;

class Route extends Controller
{
    public function index($alias, Request $req){
        $type = AliasModel::where('alias', $alias)->value('type');
        $allRequests = $req->all();
        switch($type){
            // category
            case 1:
                return (new Category)->index($alias);
            break;
            case 3:
                return (new Product)->index($alias);
            break;
            default:
                abort(404);
            break;
        }

    }
}
