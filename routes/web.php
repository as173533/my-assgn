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

Route::middleware(['web'])->group(function () {
    Route::get('', ['uses' => 'SiteController@index', 'as' => 'index']);
    Route::get('/', ['uses' => 'SiteController@index', 'as' => '/']);
    Route::get('index', ['uses' => 'SiteController@index', 'as' => 'index']);
    
    //email send cron
    Route::get('reminder-set-cron', ['uses' => 'SiteController@reminder_set', 'as' => 'reminder-set-cron']);
   
    
});
Route::middleware(['user_not_logged_in'])->group(function () {

    Route::get('signup', 'SiteController@get_signup')->name('signup');
    Route::post('signup', 'SiteController@post_signup')->name('signup');
    Route::get('active-account/{id}/{token}', 'SiteController@get_active_account')->name('active-account');
//    Route::post('resend-active-token', 'SiteController@resend_active_token')->name('resend-active-token');
    Route::get('login', 'SiteController@get_login')->name('login');
    Route::post('login', 'SiteController@post_login')->name('login');
    Route::get('forgot-password', 'SiteController@get_forgot_password')->name('forgot-password');
    Route::post('forgot-password', 'SiteController@post_forgot_password')->name('forgot-password');
    Route::get('reset-password/{id}/{token}', 'SiteController@get_reset_password')->name('reset-password');
    Route::post('set-password', 'SiteController@post_reset_password')->name('set-password');
});
Route::middleware(['user_logged_in'])->group(function () {
    Route::get('dashboard', ['uses' => 'UserController@dashboard', 'as' => 'dashboard']);
    Route::get('my-profile', 'UserController@get_profile')->name('my-profile');
    Route::post('post-myprofile', 'UserController@post_profile')->name('post-myprofile');
    Route::get('my-account', 'UserController@get_myAccount')->name('my-account');
    Route::post('post-reset-password', 'UserController@reset_password')->name('post-reset-password');
    Route::get('logout', ['uses' => 'SiteController@logout', 'as' => 'logout']);

    Route::get('user-task', 'UserController@task')->name('user-task');
    Route::get('user-task-datatable', 'UserController@task_datatable')->name('user-task-datatable');
    Route::get('user-task-add', ['uses' => 'UserController@get_add_task', 'as' => 'user-task-add']);
    Route::post('user-task-add', ['uses' => 'UserController@post_add_task', 'as' => 'user-task-add']);
    Route::get('user-task-edit/{id}', 'UserController@user_task_update')->name('user-task-edit');
    Route::post('post-user-task-update/{id}', 'UserController@post_user_task_update')->name('post-user-task-update');
    Route::post('user-task-delete/{id}', ['uses' => 'UserController@task_delete', 'as' => 'user-task-delete']);
    
  
  	

    
});
