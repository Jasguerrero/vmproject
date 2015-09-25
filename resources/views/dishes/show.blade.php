@extends('masterpage')

@section('content')

    @if($dish != null)
        <div class="page-header">
            <h1 class="text-center">{!! $dish->name !!}</h1>
        </div>

        <div class="container-fluid">
            <!-- Begin of rows -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Indicators -->
                            <img class = "img-responsive" src="{{ asset('/dishesimg/'.$dish->img_url) }}" alt="{!! $dish->name !!}">
                        </div>

                        <div class="col-sm-6">
                            Descripción Español : {!! $dish->description_es !!}
                            <hr/>
                            Descripción Ingles : {!! $dish->description_en !!}
                            <hr/>
                            Costo : ${!! $dish->price !!}
                            <hr/>
                            Cantidad : {!! $dish->measure !!}
                            <hr/>
                            Tiempo de preparación : {!! $dish->prep_time !!}
                            <hr/>
                            Fecha de Creación : {!! $dish->created_at->format('Y-m-d') !!}
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            {!! link_to('dishes/' .$dish->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
                        </div>

                        <div class="col-sm-6">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['DishController@destroy',$dish->id]]) !!}

                            {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(!$dish)
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron text-center">
                        <h1>El platillo no está disponible.</h1>
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop
