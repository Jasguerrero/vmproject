@extends('layouts.master')

@section('content')
    @if($carts != null)
        <div align="center">
            <div style="padding: 10px">
                <paper-card heading ="Cart" elevation="3">
                    @foreach($carts as $cart)
                        <paper-card heading="{!! \App\Dish::find($cart->dish_id)->name !!}">
                            <div class="card-content">
                                {!! \App\Dish::find($cart->dish_id)->prep_time !!}
                            </div>
                            <div class="card-content">
                                ${!! \App\Dish::find($cart->dish_id)->price !!}
                            </div>
                        </paper-card>
                    @endforeach

                    {!! Form::open(['url' => 'orders']) !!}
                    <div class="form-group">
                        <paper-dropdown-menu label="Payment">
                            <paper-menu name="payment_method" class="dropdown-content">
                                <paper-item value="">-Selecciona un método de pago-</paper-item>
                                @foreach($payments as $pay)
                                    <paper-item value="{!! $pay->id !!}">{!! $pay->description_es !!}</paper-item>
                                @endforeach
                            </paper-menu>
                        </paper-dropdown-menu>
                    </div>
                    <div class="form-group">
                        <paper-dropdown-menu label="Estatus">
                            <paper-menu name="status" class="dropdown-content">
                                @foreach($status as $s)
                                    <paper-item value="{!! $s->id !!}">{!! $s->description_es !!}</paper-item>
                                @endforeach
                            </paper-menu>
                        </paper-dropdown-menu>
                    </div>
                    <div class="form-group">
                        <textarea name="comments" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="cart_id" value="{!! $cart->id !!}"/>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Ordenar',['id' => 'add','class' => 'myButton']) !!}
                    </div>
                    {!! Form::close() !!}
                </paper-card>
            </div>
        </div>
    @elseif(!$carts)
        <h1>  No tiene ningún platillo agregado !</h1>
    @endif
@endsection