@extends('masterpage')


@section('content')

    @if($status != null)
        <h1 class="page-heading">Número de Status: {!! $status->id !!}</h1>
        <hr/>
        <div class="container">
    <div class="row">
        <ul class="thumbnails">
            <div class="col-md-5 col-md-offset-3">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Nombre en Español: {!! $status->description_es !!}</h4>
                         <hr/>
                         <h4>Nombre en Inglés: {!! $status->description_en !!}</h4>
                         <hr/>
                        <h5>Fecha de Creación : {!! $status->created_at->format('Y-m-d') !!}</h5>
                        <hr/>

                       <div class="row">
            <div class="col-lg-6">
                {!! link_to('statuses/' .$status->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
            </div>
                <div class="col-lg-6">
                    {!! Form::open(['method' => 'DELETE', 'action' => ['StatusController@destroy',$status->id]]) !!}

                        {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
                   </div>
                </div>
            </div>
        </ul>
    </div>
</div>


    @elseif(!$status)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron text-center">
                    <h1 class="page-heading">El status no está disponible.</h1>
                </div>
            </div>
        </div>
    @endif

@stop
