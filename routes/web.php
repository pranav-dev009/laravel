<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index', []);
})->name('home.page');

Route::view('/contact', 'home.contact')->name('home.contact');

$posts = [
    1 => [
        'id' => 1, 'name' => 'Pranav', 'exists' => 'false', 'life' => 'true'
    ],
    2 => [
        'id' => 2, 'name' => 'Parth', 'exists' => 'true'
    ],
    3 => [
        'id' => 3, 'name' => 'Dhaval', 'exists' => 'false'
    ]
];

Route::get('/posts', function() use($posts) {
    // dd(request()->all());
    dd(request()->input('page'));
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{id?}', function ($id) use($posts) {
    abort_if(!isset($posts[$id]), 404);
    return view('posts.show', ['post' => $posts[$id]]);
})->name('post.show');

Route::prefix('/fun')->name('fun.')->group(function() use($posts) {
    Route::get('responses', function() use($posts){
        return response($posts, 201)
            ->header('Content-Type', 'application/json')
            ->cookie('MY_COOKIE', 'Pranav', 3600);
    })->name('response');
    
    Route::get('redirect', function() {
        return redirect('/contact');
    })->name('redirect');
    
    Route::get('back', function() {
        return back();
    })->name('back');
    
    Route::get('named-route', function() {
        return redirect()->route('post.show', ['id' => 1]);
    })->name('named-route');
    
    Route::get('away', function() {
        return redirect()->away('https://www.azimuthrisk.com');
    })->name('away');
    
    Route::get('json', function() use($posts) {
        return response()->json($posts);
    })->name('json');
    
    Route::get('download', function() use($posts) {
        return response()->download(public_path('/Pranav.jpg'), 'face.jpg');
    })->name('download');
});