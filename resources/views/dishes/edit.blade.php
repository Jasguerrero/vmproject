@extends('masterpage')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('partials.errors')
            <h1 class="page-heading">Editar categoria</h1>
            <hr/>
            {!! Form::model($dish,['method' => 'PATCH','action' => ['DishController@update',$dish->id]]) !!}
            <div class="form-group">
                {!! Form::label('category_id','Categories:')!!}
                {!! Form::select('category_id',['' => 'Selecciona un categoria','1'=>'Desayunos','2'=>'Comidas','3'=>'Cenas'],null,['class' => 'form-control input-sm']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name','Nombre:')!!}
                {!! Form::input('text','name',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description_es','Descripción Español:')!!}
                {!! Form::textarea('description_es',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description_en','Descripción Inglés:')!!}
                {!! Form::textarea('description_en',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('img_url','Ruta de la imagen:')!!}
                {!! Form::file('img_url') !!}
            </div>
            <div class="form-group">
                {!! Form::label('price','Costo del Platillo:')!!}
                {!! Form::input('number','price',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('measure','Cantidad del platillo:')!!}
                {!! Form::input('text','measure',null,['class' => 'form-control']) !!}
            </div><div class="form-group">
                {!! Form::label('prep_time','Tiempo de Preparación:')!!}
                {!! Form::input('number','prep_time',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop