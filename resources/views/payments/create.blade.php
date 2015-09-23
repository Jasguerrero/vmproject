@extends('masterpage')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('partials.errors')
            <h1 class="page-heading">Ingresa nueva forma de pago</h1>
            <hr/>
            <!-- {!! Form::open(['url' => 'ruta']) !!} ['url' => 'suggestions','files'=> true]-->
            {!! Form::open(array('url' => 'payments')) !!}
            <div class="form-group">
                {!! Form::label('description_es','Descripción Español:')!!}
                {!! Form::textarea('description_es',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description_en','Descripción Inglés:')!!}
                {!! Form::textarea('description_en',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('crear',['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop