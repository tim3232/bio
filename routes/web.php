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
//

Route::get('/', function () {
    return redirect('login');
});
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
/*ADMIN*/
    Route::get('/', function () {
        return redirect('admin');
    });

    Route::get('clear', function () {
        Log::debug('CLEARED');
        Artisan::call('cache:clear');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('','MainController@index')->name('admin');
        Route::get('change-password','MainController@reset');
        Route::get('pages','MainController@index');
        Route::get('{id}', 'MainController@add_user')->name('add-admin');
    });

    Route::get('users', 'MainController@users')->name('users');

    /*SAVE SELECTED TEMPLATE IN ADMIN PAGE*/
    Route::post('{slug}/update_template', 'MainController@update_template')->name('update-template');
    /*DELETE PAGE*/
    Route::get('user/{id}/delete', 'MainController@delete_user')->name('delete-user');

    /*FORM*/
    Route::get('create-page', 'MainController@form')->name('page');
    Route::post('create-page', 'MainController@set_form')->name('create-page');
    //Route::post('create-page', 'MainController@change_form')->name('change-template-create');
    /*SHOW PAGE*/
    Route::get('{slug}', 'MainController@page')->name('main-page');
    /*SHOW EDIT PAGE*/
    Route::get('edit/{slug}', 'MainController@update_page')->name('edit-page');
    /*UPDATE PAGE*/
    Route::post('update/{slug}', 'MainController@store_page')->name('store-page');
    Route::post('edit/{slug}', 'MainController@change_template')->name('change-template-edit');

    /*DELETE PAGE*/
    Route::get('delete/{slug}', 'MainController@delete_page')->name('delete-page');

    /*ADD VIDEO TO PAGE*/
    Route::post('{slug}/leeloo', 'MainController@add_leeloo')->name('add-leeloo');
    /*ADD VIDEO TO PAGE*/
    Route::post('{slug}/video', 'MainController@video')->name('add-video');
    Route::get('{slug}/video', 'MainController@changeStatusVideo')->name('status-video');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});