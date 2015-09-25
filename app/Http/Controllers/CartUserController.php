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

        return view('orders.cart.index');
    }

    public function store(CartUserRequest $request)
    {
        $newitem = new Cart($request);
        Auth::user()->carts()->save($newitem);
        return view('orders.cart.index');
    }
}