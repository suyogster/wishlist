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

Route::get('/test', function(){
    return view('frontend/layouts/master');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'BlogController@dashboardIndex')->name('dashboard.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Resource Route of Blog Controller
Route::resource('/blogs', 'BlogController');

//Routes for feedback
Route::resource('/feedbacks', 'FeedbackController');

//Resource Route of Wishlist Controller
Route::resource('/wishlist','WishlistController');

//Settings Routes
Route::prefix('settings')->group(function(){
    Route::get('/', 'UserSettingsController@viewSettingsPage');
    Route::post('/','UserSettingsController@upload_avatar')->name('avatar_upload');
    Route::patch('/', 'UserSettingsController@change_password')->name('change_password');
});

//Admin Routes
Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //Admin Password Reset Routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});

//EVENTS ROUTES
Route::resource('/events', 'EventController');

//Types ROUTES
Route::resource('/types', 'TypeController');

//Itenary ROUTES
Route::resource('/itenary', 'ItenaryController');
