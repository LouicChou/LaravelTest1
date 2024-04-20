<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\User;
use App\Models\myPost;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $req)
    {
        // $users = User::all();
        // return view('user', compact('users'));

        // $addresses = Address::all();

        // $categories = Category::find(1)->posts;
        // return view('user', compact('categories'));

        
    }
}

