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

Route::get('/', 'RootController@index')->name('root.index');

Route::get('/sitemap.xml', 'SiteMapController@index')->name('root.sitemap');

Route::get('/robots.txt', function ()
{
    if (App::environment() == 'production') {
        Robots::addUserAgent('*');
        Robots::addSitemap('sitemap.xml');
    } else {
        Robots::addDisallow('*');
    }
    return Response::make(Robots::generate(), 200, ['Content-Type' => 'text/plain']);
});

Route::post('contacts/add', 'ContactController@add')->name('contacts.add');

//管理者
Route::prefix('/admin')->namespace('Admin')->group(function () {
    //マイページ関連
    Route::get('', 'IndexController@mypage')->name('admin.mypage');

    Route::prefix('/products')->group( function () {
        Route::post('add', 'ProductController@add')->name('admin.products.add');
        Route::post('{product}/edit', 'ProductController@edit')->name('admin.products.edit');
        Route::post('{product}/delete', 'ProductController@delete')->name('admin.products.delete');
    });

    //認証関連
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');
    });
});