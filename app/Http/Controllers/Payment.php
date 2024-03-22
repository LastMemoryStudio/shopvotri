<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payment extends Controller
{
    public function index(Request $req){
        $data['template']= 'payment';
        return view('template', $data);
    }
}
