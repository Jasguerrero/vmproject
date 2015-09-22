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

Route::get('/',function() {
    if(Auth::check())
        return view('pages.home');
    return view('auth.login');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'],function(){
    /* DISHES ROUTE -> Muestra todos los platillos */
    Route::get('dishes',[
        'as' => 'dish_path',
        'uses' => 'DishController@index'
    ]);

    /* DISHES ROUTE -> Muestra la forma para crear un platillo */
    Route::get('dishes/create',[
        'as' => 'dish_path',
        'uses' => 'DishController@create'
    ]);

    /* DISHES ROUTE -> Guarda el nuevo platillo */
    Route::post('dishes',[
        'as'    => 'dish_path',
        'uses'  => 'DishController@store'
    ]);
});


Route::get('orders',[
    'as' => 'order_path',
    'uses' => 'OrderController@index'
]);

