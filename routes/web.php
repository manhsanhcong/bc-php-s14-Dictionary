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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionarys', function (Illuminate\Http\Request $request) {
    $dictionary = [
        "hello" => 'xin chào',
        "how" => 'như thế nào',
        "book" => 'sách',
        "computer" => 'máy tnh'
    ];

    foreach ($dictionary as $word => $description) {
        if ($request->search == $word) {
            return view('mean', compact('description'));
        }
    }
    return view('mean_error');
})->name('dictionary');