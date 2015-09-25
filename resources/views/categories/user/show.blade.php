@extends('layouts.master')
@section('content')
    <br>
    @foreach($dishes as $dish)
        <div align="center">
            <div style="padding: 10px">
                <paper-card heading ="{!! $dish->name !!} -
                    {!! $dish->measure !!}" elevation="3">
                    <paper-card image={{URL::asset('dishesimg/'.$dish->img_url)}}>
                        <div class="card-content" align="left">
                            {!! $dish->description_es !!}
                        </div>
                        <div class ="card-content" align="left">
                            {!! $dish->description_en !!}
                        </div>
                        <div class ="card-content" align="left">
                            Tiempo de espera/Waiting time: {!! $dish->prep_time !!} min
                        </div>
                        <div class="card-content" style="font-size: small;" id="my-price" align="right">
                            ${!! $dish->price !!}
                        </div>
                        <br>

                        <div class="card-actions">
                            @include('partials.errors')
                            {!! Form::open(['url' => 'cart']) !!}
                            <div class="form-group">
                                {!! Form::input('hidden','dish_id',$dish->id,['id'=>'dish_id','class' => 'form-control']) !!}
                                {!! Form::input('hidden','status_id','1',['id'=>'status_id','class' => 'form-control']) !!}
                            </div>
                            <br>
                            <div align="right">
                            <paper-dropdown-menu label="Forma de pago">
                                <paper-menu class="dropdown-content">
                                    <paper-item>Tarjeta de credito</paper-item>
                                    <paper-item>Efectivo</paper-item>
                                    <paper-item>Cargo a la habitacion</paper-item>
                                </paper-menu>
                            </paper-dropdown-menu>
                                </div>
                            <div class="form-group" align="left">
                                <paper-input name="comments" class="form-control" label="Comentarios/Comments">
                                </paper-input>
                            </div>
                            <br>
                            <div class="form-group">
                                {!! Form::submit('Ordernar',['id' => 'add','class' => 'myButton']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </paper-card>
                </paper-card>
            </div>
        </div>
    @endforeach
@endsection