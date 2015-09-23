@extends('masterpage')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('partials.errors')
            <h1 class="page-heading">Ingresa nueva categoria</h1>
            <hr/>
            <!-- {!! Form::open(['url' => 'ruta']) !!} ['url' => 'suggestions','files'=> true]-->
            {!! Form::open(array('url' => 'categories','files' => 'true')) !!}
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
                {!! Form::submit('Crear',['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop