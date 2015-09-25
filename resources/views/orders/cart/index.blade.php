@extends('layouts.master')

@section('content')
    @if($carts != null)
        <div align="center">
            <div style="padding: 10px">
                <paper-card heading ="Cart" elevation="3">
                    <table class="card-content">
                        <thead>
                        <div style="padding-left: 20px;">
                            <tr>
                                <th style="padding-right: 10px;">Nombre</th>
                                <th style="padding-right: 10px;">Tiempo de espera</th>
                                <th style="padding-right: 10px;">Precio</th>
                            </tr>
                        </div>
                        </thead>

                        <tbody>
                        @foreach($carts as $cart)
                            <tr>
                                <td style="padding-right: 10px;">{!! \App\Dish::find($cart->dish_id)->name !!}</td>
                                <td style="padding-right: 10px;">{!! \App\Dish::find($cart->dish_id)->prep_time !!}</td>
                                <td style="padding-right: 10px;">{!! \App\Dish::find($cart->dish_id)->price !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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