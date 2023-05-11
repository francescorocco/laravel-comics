<?php

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

    $products =config('comics.comics');
    $informations = config('comics.informationList');
    $footerLinks = config('footer_links.foorterLiks');
    $footerImages = config('footer_links.followUsLinks');

    $data =[
        'products' =>$products,
        'informations' => $informations,
        'footerLinks' =>$footerLinks,
        'footerImages' => $footerImages
    ];
    

    return view('home', $data);
})->name('home');
