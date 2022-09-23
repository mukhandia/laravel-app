<?php

use App\Http\Controllers\guitarscontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
N
*/

Route::get('/', [homecontroller::class, 'index'])->name('home.index');
Route::get('/about', [homecontroller::class, 'about'])->name('home.about');
Route::get('/contact', [homecontroller::class, 'contact'])->name('home.contact');
Route::resource('guitars',guitarscontroller::class);
Route::get('/stores/{category?}/{item?}',function($category=null,$item=null){
    // $category= strip_tags(request('category'));
    if(isset($category)){
        if(isset($item)){
            return "you are viewing the store{$category}for {$item}";
        }
        return "<h1>you are viewing the store</h1>".$category;
    }
    return "<h1>you are viewing the store</h1>";
});

