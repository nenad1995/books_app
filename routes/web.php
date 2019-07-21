<?php

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
    $name = 'Nenad';
    $age = 24;
    $books = DB::table('books')->get();

    return view('welcome', compact(
        [
            'name',
            'age',
            'books'
        ]));
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/books/{id}',['as' => 'single-book', function ($id){
    $book = DB::table('books')->find($id);

    return view('single-book',compact('book'));
}]);
