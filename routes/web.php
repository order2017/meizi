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

//----------------- 前台----------------------//

Route::group(['namespace'=>'Home'],function (){

    // 首页
    Route::get('/','IndexController@index');
    Route::get('/index','IndexController@index');

});


//----------------- 后台----------------------//

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function (){

    // 管理员登录
    Route::get('/', 'LoginController@login');
    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@loginCheck');

    // 中间保护区
    Route::group(['middleware' => 'admin.login'],function (){

        // 后台首页
        Route::get('/index', 'IndexController@index');

        // 用户列表
        Route::get('/user-list', 'UserController@index');

        // 用户编辑
        Route::get('/user-edit', 'UserController@edit');

        // 新闻列表
        Route::get('/new-list','NewsController@newList');

        // 新闻添加
        Route::get('/new-insert','NewsController@newInsert');
        Route::post('/new-insert','NewsController@newInsertStore');

        // 新闻编辑
        Route::get('/new-edit/{new_id}','NewsController@newEdit');
        Route::post('/new-edit','NewsController@newEditStore');

        // 新闻删除
        Route::get('/new-del/{new_id}','NewsController@NewsDel');

        // 新闻类型列表
        Route::get('/new-type-list','NewsController@newTypeList');

        // 产品类型列表
        Route::get('/product-type-list','ProductController@ProductTypeList');

        // 产品类型添加
        Route::get('/product-type-insert','ProductController@ProductTypeInsert');
        Route::post('/product-type-insert','ProductController@ProductTypeInsertStore');

        // 产品类型编辑
        Route::get('/product-type-edit','ProductController@ProductTypeEdit');
        Route::post('/product-type-edit','ProductController@ProductTypeEditStore');

        // 产品类型删除
        Route::get('/product-type-del/{product_type_id}','ProductController@ProductTypeDelete');

        // 后台管理员退出
        Route::get('/logout', 'LoginController@logout');

    });

});