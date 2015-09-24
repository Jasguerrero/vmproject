@extends('masterpage')


@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            @include('partials.errors')
            <div class="form-area"> 
            {!! Form::model($payment,['method' => 'PATCH','action' => ['PaymentController@update',$payment->id]]) !!}
            <br style="clear:both">
            <h2 class="page-heading">Editar Forma de Pago</h2>
            <hr/>
            
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