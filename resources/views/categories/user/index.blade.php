@extends('layouts.master')

@section('content')
    <br>
    <div align="center">
        @foreach($categories as $category)
            <div style="padding: 10px">
                <a href= "{!! url('menu/' . $category->id) !!} ">
                    <paper-card heading="{!! $category->description_es !!} /
                    {!! $category->description_en !!}"
                                elevation="3">
                        <paper-card image={{URL::asset('dishesimg/'.$category->img_url)}}></paper-card>
                    </paper-card>
                </a>
            </div>
        @endforeach
    </div>
@endsection