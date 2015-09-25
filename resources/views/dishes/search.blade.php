@extends('masterpage')


@section('content')
    @if($dishes != null)
        <h1 class="page-header">Platillos</h1>
        {!! Form::open(['url' => '#','class'=>'form-inline']) !!}
            <div class="form-group">
                {!! Form::label('search','Categorias:')!!}
                <select name="search" id="search" class="form-control input-sm">
                    <option value="">- Seleciona una Categoria -</option>
                    @foreach($categories as $category)
                        <option value="{!! $category->id !!}">{!! $category->description_es !!}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                {!! Form::submit('Filtrar',['class' => 'btn btn-primary form-control']) !!}
            </div>

            <div class="form-group">
                <a href="{{ URL::previous() }}">Mostrar todos</a>
            </div>
        {!! Form::close() !!}

        <br/>
        <ul id="dishes" class="list-group">
            @foreach($dishes as $dish)
                <li class="list-group-item">
                    <span class="badge bg-success">{!! link_to('dishes/' . $dish->id ,'Ver',null) !!}</span>
                    Nombre del platillo : {!! $dish->name !!} - Categoria : {!! \App\Category::find($dish->category_id)->description_es !!}
                </li>
            @endforeach
        </ul>

    @elseif(!$dishes)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No hay platillos</h1>
                </div>
            </div>
        </div>
    @endif
@stop
