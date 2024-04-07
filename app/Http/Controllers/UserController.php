<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $req)
    {
        // $users = User::all();
        // return view('user', compact('users'));

        $addresses = Address::all();
        return view('user', compact('addresses'));
    }
}
