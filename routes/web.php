<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cricketcontroller;
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
Route::get('/country',[cricketcontroller::class,'createcountry']);
Route::post('/countryread',[cricketcontroller::class,'store']);
Route::get('/playerview',[cricketcontroller :: class,'index']);

Route::post('/playerread',[cricketcontroller::class,'playerstore']);
Route::get('/',[cricketcontroller::class,'getAllGenre']);

route::get('/addcategory',[cricketcontroller::class,'getAllGenre']);

Route::post('/playersearch',[cricketcontroller::class,'search']);
Route::get('/sort',[cricketcontroller::class,'sort']);
/*
Route::get('cat', function () {
    return view('category');
}); */