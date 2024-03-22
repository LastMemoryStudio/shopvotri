<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function index(){
        $data['template'] = 'detail';
        return view('template',$data);
    }
    
}
