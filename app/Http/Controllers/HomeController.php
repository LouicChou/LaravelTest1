<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function __invoke(Request $req)
    {
        // get
        /*
        return DB::table('posts')->get();    //all data
        return DB::table('posts')->find(7);  //id=7
        return DB::table('posts')->first(); //第一筆
        // 只搜尋最多2個欄位(相同資料只會有一筆)
        return DB::table('posts')->pluck('id', 'title', 'user_id');
        return DB::table('posts')->where('id', '>', 3)->where('id', '<', 8)->get();
        */


        // insert
        /*
        DB::table('posts')->insert([
            [
                'title' => 'This is one',
                'description' => 'des 1',
                'status' => 1,
                'Publish_date' => date('Y-m-d'),
                'user_id' => 1
            ],
            [
                'title' => 'This is two',
                'description' => 'des 2',
                'status' => 0,
                'Publish_date' => date('Y-m-d'),
                'user_id' => 2
            ]
        ]);

        dd('success');
        */

        //update
        /*
        DB::table('posts')->where('id', 12)->update([
            'title' => 'This is one updated',
            'description' => 'des 1 updated'
        ]);

        dd('success');
        */

        //delete
        /*
        DB::table('posts')->where('id', 12)->delete();
        dd('success');
        */

        //join
        /*
        //搜尋條件[posts]的category_id=[categories]的id，兩個資料表全部欄位
        return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
            ->get();

        //只要顯示categories的欄位
        return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('categories.*')
            ->get();
        */

        //使用聚集Aggregates

        return DB::table('posts')->sum('id');
        return DB::table('posts')->count();


        // transfer var
        // $blogs = [
        //     [
        //         'title' => 'title one',
        //         'body' => 'this is a.body text',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'title two',
        //         'body' => 'this is b.body text',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'title three',
        //         'body' => 'this is c.body text',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'title fore',
        //         'body' => 'this is d.body text',
        //         'status' => 0
        //     ]
        // ];
        // return view('home', compact('blogs'));
    }
}
