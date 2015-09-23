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
/** AdminSide **/
Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'],function(){
    /* DISHES ROUTE -> Muestra todos los platillos */
    Route::resource('dishes', 'DishController');
    Route::resource('categories', 'CategoryController');
    Route::resource('statuses', 'StatusController');
});
/** AdminSide **/

Route::get('orders',[
    'as' => 'order_path',
    'uses' => 'OrderController@index'
]);

