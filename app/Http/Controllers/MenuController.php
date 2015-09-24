<?php

namespace App\Http\Controllers;

use App\Dish;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function breakfast()
    {
        $dishes = DB::table('dishes')->where('category_id','=',1)->get();
        //dd($dishes);
        return view('menus.breakfast')->with('dishes',$dishes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lunch()
    {
        $dishes = DB::table('dishes')->where('category_id','=',2)->get();
        return view('menus.lunch')->with('dishes',$dishes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dinner()
    {
        $dishes = DB::table('dishes')->where('category_id','=',3)->get();
        return view('menus.dinner')->with('dishes',$dishes);

    }


}
