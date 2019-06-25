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

Route::get('/about', function () {
    return view('about2');
});

/*
Route::get('/about2',function(){
	return view('about');
});*/

Route::get('/blog-single', function(){
	return view('blogSingle');
});

Route::get('/blog', function(){
	return view('blog');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/index', function(){
	return view('index');
});

Route::get('/portfolio', function(){
	return view('portfolio');
});

Route::get('/services', function(){
	return view('services');
});

Route::get('/portfolioSingle', function(){
	return view('portfolioSingle');
});


//admin

Route::get('/charts', function(){
	return view('admin/charts');
});

Route::get('/forms', function(){
	return view('admin/forms');
});

Route::get('/login', function(){
	return view('admin/login');
});

Route::get('/indexAdmin', function(){
	return view('admin/index');
});

Route::get('/register', function(){
	return view('admin/register');
});

Route::get('tables', function(){
	return view('admin/tables');
});
