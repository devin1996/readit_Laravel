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
    return view('welcome');
});

/*
Route::get('/', function () {
    return 'Hello World';
});
*/
/*
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Give hello in the URL

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/about', function () {
    return view('pages.about');
});

*/



/*
Route::get('/users/{id}/', function ($id) {
    return 'This is User '.$id;
});


Add the url name

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is User '.$name.'with an id of '.$id;
});
*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
// Route::get('/about', function () {
//     return view('pages.about');
// });
Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
