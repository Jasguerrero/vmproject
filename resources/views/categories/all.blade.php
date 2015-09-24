@extends('masterpage')


@section('content')
    @if($categories != null)
        <h1 class="page-heading">Categorias</h1>
        <hr/>
        <ul class="list-group">
        @foreach($categories as $category)
                <li class="list-group-item">
                    <span class="badge bg-success">{!! link_to('categories/' . $category->id ,'Ver',null) !!}</span>
                    Número de categoria : {!! $category->id !!}
                </li>
        @endforeach
        </ul>
    @elseif(!$categories)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No tienen categorias</h1>
                </div>
            </div>
        </div>
    @endif

@stop
