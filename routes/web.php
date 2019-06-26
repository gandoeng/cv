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

/*Route::get('/charts', function(){
	return view('admin/charts');
});*/


//halaman form
Route::get('/forms','Controller@forms');
Route::post('/forms/edukasi', 'Controller@edukasiInput');
Route::post('/forms/pengalaman', 'Controller@pengalamanInput');
Route::post('/forms/skill', 'Controller@skillInput');
Route::post('/forms/cv','Controller@uploadCV');
Route::post('/forms/berita','Controller@beritaInput');
Route::post('/forms/portfolio','Controller@portfolioInput');

Route::get('/hapusEdukasi/{id}', 'Controller@hapusEdukasi');
Route::get('/hapusPengalaman/{id}', 'Controller@hapusPengalaman');
Route::get('/hapusSkill/{id}', 'Controller@hapusSkill');
Route::get('/hapusCV/{id}', 'Controller@hapusCV');
Route::get('/hapusBerita/{id}', 'Controller@hapusBerita');
Route::get('/hapusPortfolio/{id}', 'Controller@hapusPortfolio');

//halaman login
Route::get('/login', 'Controller@login');
Route::get('/login/proses', 'Controller@proses');

/*Route::get('/indexAdmin', function(){
	return view('admin/index');
});*/

/*Route::get('/register', function(){
	return view('admin/register');
});*/

Route::get('tables', 'Controller@tablesTampil');
