<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchDishController extends Controller
{

    public function search(SearchRequest $request)
    {
        //dd($request->search);
        $categories = Auth::user()->categories()->get();
        $dishes = Auth::user()->dishes()->where('category_id','=',$request->all())->get();
        //dd($dishes);
        return view('dishes.all')->with(['dishes'=>$dishes,'categories'=>$categories]);
    }


}
