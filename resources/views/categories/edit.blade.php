@extends('masterpage')

@section('content')
    <div class="row">
        <div class="col-lg-5 col-lg-offset-3">
            @include('partials.errors')

      <<<<<<< HEAD
            <h1 class="page-heading">Editar categoria</h1>
            <hr/>
            <div class="form-area">
                {!! Form::model($category,['method' => 'PATCH', 'files' => 'true','action' => ['CategoryController@update',$category->id]]) !!}
                    <br style="clear:both">
                    <div class="form-group">
                        {!! Form::label('description_es','Nombre Español:')!!}
                        {!! Form::input('text','description_es',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description_en','Nombre Inglés:')!!}
                        {!! Form::input('text','description_en',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('img_url','Ruta de la imagen:')!!}
                        {!! Form::file('img_url') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update',['class' => 'btn btn-success form-control']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
