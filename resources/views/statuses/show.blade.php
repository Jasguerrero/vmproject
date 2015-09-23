@extends('app')


@section('content')
    @if($status != null)
        <h1 class="page-heading">Número de Status: {!! $status->id !!}</h1>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Lenguajes Disponibles</h3>
            </div>
            <div class="panel-body">
                {!! $status->description_es !!}
                <hr/>
                {!! $status->description_en !!}
            </div>
            <div class="panel-footer">Fecha de Creación : {!! $status->created_at->format('Y-m-d') !!} </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! link_to('statuses/' .$status->id. '/edit', 'Update',array('class' => 'btn btn-lg btn-primary center-block')) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::open(['method' => 'DELETE', 'action' => ['statusController@destroy',$status->id]]) !!}

                    {!! Form::submit('Delete',['class' => 'btn btn-lg btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    @elseif(!$status)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">El status no está disponible</h1>
                </div>
            </div>
        </div>
    @endif

@stop