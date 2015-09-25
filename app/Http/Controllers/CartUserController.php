<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CartUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Illuminate\Support\Facades\DB;

class CartUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cartItems = Auth::user()->carts()->get();
        return view('orders.cart.index')->with('carItems',$cartItems);
    }

    /**
     * Store a newly created resource in storage.
     * Guarda nuestra nueva categoria en la base de datos
     * @param    $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartUserRequest $request)
    {

        $newItem = new Cart($request->all());
        //dd(Auth::user()->carts()->get());
        Auth::user()->carts()->save($newItem);
        dd(Auth::user()->carts()->get());
        return view('orders.cart.index');
    }
}