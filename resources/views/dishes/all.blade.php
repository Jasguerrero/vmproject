@extends('masterpage')


@section('content')
    @if($dishes != null)
        <h1 class="page-heading">Platillos</h1>
        <hr/>
        <ul class="list-group">
            @foreach($dishes as $dish)
                <li class="list-group-item">
                    <span class="badge">{!! link_to('dishes/' . $dish->id ,'Ver',null) !!}</span>
                    Nombre del platillo : {!! $dish->name !!} - Categoria : {!! \App\Category::find($dish->category_id)->description_es !!}
                </li>
            @endforeach
        </ul>

    @elseif(!$dishes)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No has hecho ninguna sugencia</h1>
                </div>
            </div>
        </div>
    @endif
@stop