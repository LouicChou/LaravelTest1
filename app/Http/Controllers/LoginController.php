<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $req)
    {
        $req->validate([
            // 多條件驗證:必填，只能是英文字元，至少六個字元
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            'password' => 'required',
            'email' => ['required', 'email']
        ]);

        return $req;
    }
}
