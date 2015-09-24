@extends('masterpage')


@section('content')
    @if($category != null)
        <h1 class="page-heading">Número de categoría: {!! $category->id !!}</h1>
        <hr/>
<div class="container">
    <div class="row">
        <ul class="thumbnails">
            <div class="col-md-5 col-md-offset-3">
                <div class="thumbnail">
                    <img src="{{ asset('/dishesimg/'.$category->img_url) }}" alt="ALT NAME" class="img-responsive" style="border: 2px solid #000;" />
                    <div class="caption">
                        <h4>{!! $category->description_es !!}</h4>
                        
                        <h4>{!! $category->description_en !!}</h4>
                         
                        <h5>Fecha de Creación : {!! $category->created_at->format('Y-m-d') !!}</h5>
                        <hr/>
                        
                         <div class="row">
            <div class="col-lg-6">
                {!! link_to('categories/' .$category->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}

                    {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>

                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>

    @elseif(!$category)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">La categoria no está disponible</h1>
                </div>
            </div>
        </div>
    @endif

@stop