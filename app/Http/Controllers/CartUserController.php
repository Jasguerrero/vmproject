<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CartUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class CartUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Auth::user()->carts()->get();
        return view('orders.cart.index')->with('carts',$carts);
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
        $newItem->payment_id = 1;
        Auth::user()->carts()->save($newItem);
        $carts = Auth::user()->carts()->get();
        return redirect('cart');
    }
}