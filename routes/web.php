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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@msg');
//books routes
Route::match(['get','post'],'/books', 'BookController@create');
Route::match(['get','post'],'/books/store', 'BookController@store');
Route::get('/view_product', 'BookController@index');
Route::get('/search', 'BookController@search');
Route::get("/books/{bid}","BookController@destroy");
Route::match(['get','post'],"/books/edit/{bid}","BookController@edit");

Route::get('/viewbooks', 'BookController@index1');
Route::get('/view', 'issuebookcontroller@fine');
Route::get('/viewreqinfo', 'issuebookcontroller@index1');
//Route::match(['get','post'],'/approve', 'issuebookcontroller@req');
Route::match(['get','post'],'/approve/edit', 'issuebookcontroller@edit');

Route::get('/approved', function () {
    return view('admin.approve');
});
Route::match(['get','post'],'/viewreq', 'issuebookcontroller@index2');

//feedback
Route::match(['get','post'],'/feedback', 'fedbackcontroller@create');
Route::match(['get','post'],'/feedback/store', 'fedbackcontroller@store');
Route::get('/feedback', 'fedbackcontroller@index');

Route::match(['get','post'],'/stufeedback', 'fedbackcontroller@create1');
Route::match(['get','post'],'/stufeedback/store', 'fedbackcontroller@store1');
Route::get('/stufeedback', 'fedbackcontroller@index1');
//ADMIN
Route::match(['get','post'],'/admin', 'admincontroller@create');
Route::match(['get','post'],'/admin/store', 'admincontroller@store');
Route::match(['get','post'],'/admin/login', 'admincontroller@login');
Route::get('/admin/books', 'admincontroller@books');
Route::get('/front', 'admincontroller@index');
Route::get('/admin/create', function () {
    return view('admin.admin_login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/front', function () {
    return view('admin.front');
});
Route::get('/admin/students', 'HomeController@ind');

Route::get('/admin/search', 'HomeController@search');
Route::get('/profile', 'HomeController@show');
Route::get('/resetpassword', function () {
    return view('resetpw');
    });
 
    Route::post('/updatepassword ', 'HomeController@UpdatePassword');
    Route::get('/admininbox', function () {
        return view('admin.adminmsg');
        });
   
   //issue book
    Route::match(['get','post'],'/issue', 'issuebookcontroller@store');
    Route::match(['get','post'],'/issuecr', 'issuebookcontroller@create');
    Route::match(['get','post'],'/issueinfo', 'issuebookcontroller@issueinfo');
    Route::match(['get','post'],'/expired', 'issuebookcontroller@expired');
    Route::match(['get','post'],'/return', 'issuebookcontroller@returned');
    
    //edit profile

    Route::get('/edit/user/', 'HomeController@edit');
    Route::post('/edit/user/', 'HomeController@update')->name('user.update');
    //msg
    Route::match(['get','post'],'/inbox', 'messagecontroller@create');
    
    Route::match(['get','post'],'/inbox/store', 'messagecontroller@store');
    Route::get('/inbox', 'messagecontroller@index');
   

