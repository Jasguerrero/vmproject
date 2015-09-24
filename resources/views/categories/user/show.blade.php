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
                        <div align="left" style="padding-left: 20px; padding-right: 20px;" >
                            <paper-input label="Comentarios/Comments" name="comment"></paper-input>
                        </div>
                        <br>
                        <div align="left" style="padding-left: 20px;">Cantidad/Quantity</div>
                        <div style="padding-left: 20px; padding-right: 20px">
                            <paper-slider id="my-card" min="1" max="10" value="1"
                                          pin="true" editable="true" name="qty"></paper-slider>
                        </div>
                        <div class="card-actions">
                            <button></button>
                            <paper-button raised id="my-order-button">Ordenar/Order</paper-button>
                        </div>
                    </paper-card>
                </paper-card>
            </div>
        </div>
    @endforeach
@endsection