<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data=$request->all ();
        if(Arr::get($data,'username')=='weims'){
            session (['user'=>[
                'username'=>'weims',
                'sex'=>'1'
            ]]);
            return response ()->json ([
                'msg'=>'登录成功'
            ],200);
        }
    }

    public function out(Request $request)
    {
        session ()->forget ('user');
        return response ()->json ([
            'msg'=>'已退出'
        ],200);
    }
}
