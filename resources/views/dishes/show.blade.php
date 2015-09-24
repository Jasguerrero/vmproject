@extends('masterpage')


@section('content')
    @if($dish != null)
        <h1 class="page-heading">Nombre del platillo: {!! $dish->name !!}</h1>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Detalles del platillo</h3>
            </div>
            <div class="panel-body">

                <img class="img-responsive center-block" width="100px" height="50px" src="{{ asset('/dishesimg/'.$dish->img_url) }}" alt="{!! $dish->name !!}"/>
                <hr/>
                Descrición Español : {!! $dish->description_es !!}
                <hr/>
                Descrición Ingles : {!! $dish->description_en !!}
                <hr/>
                Costo : {!! $dish->price !!}
                <hr/>
                Cantidad : {!! $dish->measure !!}
                <hr/>
                Tiempo de preparación : {!! $dish->prep_time !!}
            </div>
            <div class="panel-footer">Fecha de Creación : {!! $dish->created_at->format('Y-m-d') !!} </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! link_to('dishes/' .$dish->id. '/edit', 'Update',array('class' => 'btn btn-lg btn-primary center-block')) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::open(['method' => 'DELETE', 'action' => ['DishController@destroy',$dish->id]]) !!}

                {!! Form::submit('Delete',['class' => 'btn btn-lg btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    @elseif(!$dish)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">La categoria no está disponible</h1>
                </div>
            </div>
        </div>
    @endif
@stop