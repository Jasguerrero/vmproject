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
                        <div align="left" style="padding-left: 20px;">Cantidad/Quantity</div>

                        <div class="card-actions">
                            {!! Form::open(['url' => 'cart']) !!}
                            <div class="form-group">
                                {!! Form::input('hidden','dish_id',$dish->id,['id'=>'dish_id','class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Agregar al carrito',['id' => 'add','class' => 'myButton']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </paper-card>
                </paper-card>
            </div>
        </div>
    @endforeach
@endsection