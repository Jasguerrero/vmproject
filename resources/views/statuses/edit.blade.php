@extends('app')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('partials.errors')
            <h1 class="page-heading">Editar status</h1>
            <hr/>
            {!! Form::model($status,['method' => 'PATCH','action' => ['StatusController@update',$status->id]]) !!}
            <div class="form-group">
                {!! Form::label('description_es','Descripción Español:')!!}
                {!! Form::textarea('description_es',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description_en','Descripción Inglés:')!!}
                {!! Form::textarea('description_en',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop