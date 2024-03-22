<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MemoryAdmin;
use App\Constants\AuthConstant;
use App\Constants\QueryConstant;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class Admin implements MemoryAdmin
{
    public function index(Request $req){

    }

    public function create(Request $req){
        $data = [];
        $data = $req->only('name', 'password');
        $data['text_pas'] = $data['password'];
        $data['password'] = Hash::make($data['password']);

        try{
            AdminModel::create($data);
            return response()->json(['result' => true, 'data' => ['msg' => 'Thêm thành công']]);
        } catch(\Exception $e) {
            return response()->json(['result' => false, 'errors' => ['msg' => QueryConstant::QUERY_FAIL, 'err' => $e]]);
        }
    }

    public function getAll(Request $req){

    }

    public function get(Request $req){

    }

    public function update(Request $req){
        
    }

    public function delete(Request $req){

    }


    public function createToken($userId){
        $time_expired_refresh_token = time() + 60 * 60 * 24 * 30;
        $refresh_token = JWT::encode(
            [
                'userid' => $userId,
                'exp'    => $time_expired_refresh_token
            ],
            AuthConstant::REFRESH_TOKEN_CREATED,
            'HS256'
        );

        $access_token = JWT::encode(
            [
                'userid' => $userId,
                'exp'    => time() + 60 * 60 * 24
            ],
            AuthConstant::ACCESS_TOKEN_CREATED,
            'HS256'
        );

        AdminModel::where('id', $userId)->update([
            'refresh_token' => $refresh_token,
        ]);
        return ['access_token' => $access_token, 'refresh_token' => $refresh_token];
    }
}
