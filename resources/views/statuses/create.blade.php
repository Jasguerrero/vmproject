@extends('masterpage')

@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
        @include('partials.errors')
            <div class="form-area">
                {!! Form::open(array('url' => 'statuses', 'role' => 'form')) !!}
                    <h3 style="margin-bottom: 25px;" class="page-header text-center">Ingresa Un Status</h3>
                    <div class="form-group">
                        {!! Form::input('text','description_es',null,['class' => 'form-control', 'placeholder' => 'Nombre en Español']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::input('text','description_en',null,['class' => 'form-control', 'placeholder' => 'Nombre en Inglés']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Crear',['class' => 'btn btn-success form-control']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
