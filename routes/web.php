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
    return view('pages/welcome');
})->name("home");

Route::get('/about-us', function () {
    return view("pages/about");
})->name("about");

//     (URI , vIEW , Array Of Data)

Route::view('contact-me' , "pages/contact" , [
    'page_name' =>  'Contact Me Page',
    'page_description'  => "This is Description"
])->name("contact");


Route::get('category/{id}', function ($id) {

    $cats = [
        '1' =>  'Games',
        '2' =>  'Programing',
        '3' =>  'Books'
    ];

    return view("pages/category" , [
        'the_id' => $cats[$id] ?? "This Id Not Found"
    ]);
});