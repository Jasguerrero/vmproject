@extends('app')

@section('content')
    @if($dishes != null)
        <h1 class="page-heading">Platillos</h1>
        @foreach($dishes as $dish)
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nombre del platillo: {!! $dish->name !!}</h3>
                        </div>
                        <div class="panel-body">

                            <img class="img-responsive center-block" width="100px" height="50px" src="{{ asset('/dishesimg/'.$dish->img_url) }}" alt="{!! $dish->name !!}"/>
                            <hr/>
                            Descrición Español : {!! $dish->description_es !!}
                            <hr/>
                            Costo : {!! $dish->price !!}
                            <hr/>
                            Cantidad : {!! $dish->measure !!}
                            <hr/>
                            Tiempo de preparación : {!! $dish->prep_time !!}
                        </div>
                        <div class="panel-footer">buttons</div>
                    </div>
                </div>
            </div>
        @endforeach

    @elseif(!$dishes)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No contamos con desayunos por el momento</h1>
                </div>
            </div>
        </div>
    @endif
@endsection