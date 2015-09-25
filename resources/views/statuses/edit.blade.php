@extends('masterpage')


@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            @include('partials.errors')
             <div class="form-area">
              {!! Form::model($status,['method' => 'PATCH','action' => ['StatusController@update',$status->id]]) !!}
             <br style="clear:both">
            <h1 class="page-header text-center">Editar Status</h1>

            <div class="form-group">
                {!! Form::label('description_es','Descripción Español:')!!}
                {!! Form::input('text','description_es',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description_en','Descripción Inglés:')!!}
                {!! Form::input('text','description_en',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update',['class' => 'btn btn-success form-control']) !!}
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
