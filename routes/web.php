<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/home', function () {
    $blogs = [
        [
            'title' => 'title one',
            'body' => 'this is body text',
            'status' => '1'
        ],
        [
            'title' => 'title two',
            'body' => 'this is body text',
            'status' => '0'
        ],
        [
            'title' => 'title three',
            'body' => 'this is body text',
            'status' => '1'
        ],
        [
            'title' => 'title four',
            'body' => 'this is body text',
            'status' => '1'
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('/about', function () {
    $about = 'This is about page';
    $about2 = 'This is about two';
    return view('about', compact('about', 'about2'));;
});


Route::get('/contant', function () {
    return view('contant.index');
});

route::group(['prefix' => 'customer'], function () {
    Route::get('/', function () {
        return "<h1>customer list</h1>";
    });

    Route::get('/create', function () {
        return "<h1>customer create</h1>";
    });

    Route::get('/show', function () {
        return "<h1>customer show</h1>";
    });
});

route::fallback(function () {
    return "Route not exist";
});
