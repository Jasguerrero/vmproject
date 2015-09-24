@extends('masterpage')


@section('content')
    @if($dish != null)
        <h1 class="page-heading">Nombre del platillo: {!! $dish->name !!}</h1>
        <hr/>
<div class="container">

    <!-- Begin of rows -->
    <div class="row">
        <div class="col-xs-9 col-xs-offset-1 slide-row">
            <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner visible-phone">
                <div class="item active">
                    <img class = "img-responsive" src="{{ asset('/dishesimg/'.$dish->img_url) }}" alt="{!! $dish->name !!}">
                </div>
              </div>
            </div>
            <div class="slide-content">
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

            <div class="slide-footer">

        <div class="row">
            <div class="col-lg-3 col-md-offset-6">
                {!! link_to('dishes/' .$dish->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
            </div>
                <div class="col-lg-3 col-md-offset-0">
                    {!! Form::open(['method' => 'DELETE', 'action' => ['DishController@destroy',$dish->id]]) !!}

                    {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
        </div> 
      

          <!--   <div class="row">
            <div class="col-lg-3 col-md-offset-6">
                {!! link_to('dishes/' .$dish->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
            </div>
            <div class="col-lg-3 col-md-offset-0">
                {!! Form::open(['method' => 'DELETE', 'action' => ['DishController@destroy',$dish->id]]) !!}

                {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>

            </div> -->
        </div>
    </div>
    
        </div>
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