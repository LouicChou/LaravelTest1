<?php

namespace App\Http\Controllers;

use App\Models\myPost;  // 引入要用的model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function __invoke(Request $req)
    {
        // Mass Assignment - update
        // $post = myPost::where('status', 1)->update([
        //     'status' => 0
        // ]);
        // dd('success');


        // Mass Assignment - insert
        // $post = myPost::create([
        //     'title' => 'this is title from Mass assign 07',
        //     'description' => 'this is description from Mass assign 07',
        //     'status' => 1,
        //     'Publish_date' => date('Y-m-d'),
        //     'user_id' => 7,
        //     'category_id' => 17,
        // ]);

        // dd('success');

        // delete
        // $Post = myPost::where('user_id', 9999)->delete();
        // dd('success');

        // update
        // 用get()會回傳陣列會失敗，所以要用first()
        // $Post = myPost::where('user_id', '=', 2)->first();
        // $Post->title = 'this is new three';
        // $Post->description = 'this is new three desc';
        // $Post->user_id = 3;
        // $Post->save();  //執行
        // dd('success');  //執行後訊息

        // // insert
        // $Post = new myPost();   //宣告變數為model
        // // 指定各欄位資料
        // $Post->title = 'this is four';
        // $Post->description = 'des 4';
        // $Post->status = '0';
        // $Post->Publish_date = date('Y-m-d');
        // $Post->user_id = 3;
        // $Post->category_id = 5;
        // $Post->save();  //執行
        // dd('success');  //執行後訊息

        // 取得category_id>0並且user_id>2的資料
        // return myPost::where('category_id', '>', 0)->where('user_id', '>', 2)->get();

        // 取得category_id>0或是user_id>2的資料
        // return myPost::where('category_id', '>', 0)->orwhere('user_id', '>', 2)->get();


        //取得id為13的title內容，若沒有這個id就拋回404錯誤(findorfail())，若沒使用會得到一片空白
        // $posts = myPost::findOrfail(13);
        // return $posts->title;

        // 迴圈顯示要出現的資料
        // $posts = myPost::all();
        // foreach ($posts as $post) {
        //     echo $post->title;
        // }

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

        // return DB::table('posts')->sum('id');
        // return DB::table('posts')->count();


        // transfer var
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
        return view('home', compact('blogs'));
    }
}
