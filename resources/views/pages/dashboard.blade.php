@extends('masterpage')


@section('content')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h1>Bienvenido al dashboard Administrador, <b> {!! Auth::user()->name !!}</b></h1>
            </div>
        </div>
    </div>
@stop