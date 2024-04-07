<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $req)
    {
        $blogs = [
            [
                'title' => 'title one',
                'body' => 'this is a.body text',
                'status' => 1
            ],
            [
                'title' => 'title two',
                'body' => 'this is b.body text',
                'status' => 0
            ],
            [
                'title' => 'title three',
                'body' => 'this is c.body text',
                'status' => 1
            ],
            [
                'title' => 'title fore',
                'body' => 'this is d.body text',
                'status' => 0
            ]
        ];
        return view('user', compact('blogs'));
    }
}
