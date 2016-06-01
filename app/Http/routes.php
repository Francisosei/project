<?php

Route::group(['middleware' => 'web'], function () {

    Route::auth();
   // Route::get('/', function () {
   //     return view('welcome');
   // });
    Route::get('locked',function(){
        return view('locked');
    });
    Route::get('/', [
    'as' => '/post', 'uses' => 'PostController@post'
]);
//admin
    // Route::get('/',function(){
    //    echo 'You have Access';
    // })->middleware('isAdmin');

    Route::get('/home', 'HomeController@index');
     Route::get('/dashboard', 'HomeController@index');
    //Route::resource('');
    //route for student controller
    
    Route::get('/company', 'CompanyController@index');
    Route::get('companys/create', 'CompanyController@create');//->middleware('auth');
   Route::post('store_company', 'CompanyController@store');
    
    //Route::get('//{id}','CompanytController@edit');
    Route::post('store', 'StudentController@insert');
    //Route::patch('/update/{id}', 'StudentController@update');
    Route::delete('destroy/{id}', 'StudentController@destroy');
    Route::get('/student', 'StudentController@view'); //->middleware('isAdmin');
    Route::get('pages/create', 'StudentController@create');//->middleware('auth');

    //route for company controller
    //Route::delete('/task/{task}', 'AsseController@destroy');
     Route::delete('/task/{task}', 'CompanyController@destroy');
    
    //route for post controller
    Route::get('available', 'PostController@view');
     //Route::post('available_post', 'PostController@available_post');
      Route::get('create_post', 'PostController@create_post');
    Route::post('store_post', 'PostController@store');

    //route for user controller
   Route::get('show/{id}','UserController@show');
    Route::get('edit/{id}','UserController@edit');
   Route::post('/update/{id}','UserController@update');

    
});
