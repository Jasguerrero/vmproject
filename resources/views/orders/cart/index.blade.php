@extends('layouts.master')

@section('content')
    @if($carts != null)
        <div align="center">
            <div style="padding: 10px">
                <div align="center">
                    <h2>CART</h2>
                </div>
                    @foreach($carts as $cart)
                        <paper-card heading="Número de orden: {!! $cart->id !!}" style="padding: 5px;">
                            <div class="card-content">
                                Nombre del platillo{!! \App\Dish::find($cart->dish_id)->name !!}
                            </div>
                            <div class="card-content">
                                {!! \App\Dish::find($cart->dish_id)->prep_time !!}
                            </div>
                            <div class="card-content">
                                {!! \App\Dish::find($cart->dish_id)->price !!}
                            </div>
                            <div class="card-content">
                                Status de la orden : {!! \App\Status::find($cart->status_id)->description_es !!}
                            </div>
                            <div class="card-content">
                                Comentarios del platillos
                                <br/>
                                {!! $cart->comments !!}
                            </div>
                        </paper-card>

                    @endforeach
            </div>
        </div>
    @elseif(!$carts)
        <h1>  No tiene ningún platillo agregado !</h1>
    @endif
@endsection