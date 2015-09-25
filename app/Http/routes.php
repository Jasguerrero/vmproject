<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('/', 'CategoriesUserController@index');
Route::resource('/home', 'CategoriesUserController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/** AdminSide **/
Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'],function(){
    /* DISHES ROUTE -> Muestra todos los platillos */
    Route::get('dashboard',function() {
        return view('pages.dashboard');
    });

    Route::resource('dishes', 'DishController');

    Route::get('search',[
        'as' => 'breakfast_path',
        'uses' => 'SearchDishController@search'
    ]);

    Route::resource('categories', 'CategoryController');
    Route::resource('statuses', 'StatusController');
    Route::resource('payments', 'PaymentController');
    Route::resource('carts', 'CartController');
});

Route::group(['middleware' => 'cors'], function(){
    Route::get('carts/fetch','CartController@fetch');
});
/** AdminSide **/


/** UserSide **/
Route::resource('menu', 'CategoriesUserController',
    ['only' => ['index', 'show']
]);

Route::resource('cart', 'CartUserController',
    ['only' => ['index','store']
]);
Route::get('orders',[
    'as' => 'order_path',
    'uses' => 'OrderController@index'
]);
