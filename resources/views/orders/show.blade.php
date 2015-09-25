@extends('layouts.master')

@section('content')
    <br>
    <paper-card heading ="Order" elevation="3">
        @foreach($orders as $order)
            <div style="padding: 10px">
            <paper-card heading="{{!! $order-> !!}}}">
                <div class="card-content">
                    Jalas el carrito_id->comments
                </div>
            </paper-card>
            </div>
        @endforeach
    </paper-card>
@endsection