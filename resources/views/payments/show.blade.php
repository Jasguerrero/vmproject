@extends('app')


@section('content')
    @if($payment != null)
        <h1 class="page-heading">Número de forma de pago: {!! $payment->id !!}</h1>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Lenguajes Disponibles</h3>
            </div>
            <div class="panel-body">
                {!! $payment->description_es !!}
                <hr/>
                {!! $payment->description_en !!}
            </div>
            <div class="panel-footer">Fecha de Creación : {!! $payment->created_at->format('Y-m-d') !!} </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {!! link_to('payments/' .$payment->id. '/edit', 'Update',array('class' => 'btn btn-lg btn-primary center-block')) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::open(['method' => 'DELETE', 'action' => ['PaymentController@destroy',$payment->id]]) !!}

                {!! Form::submit('Delete',['class' => 'btn btn-lg btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    @elseif(!$category)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">La categoria no está disponible</h1>
                </div>
            </div>
        </div>
    @endif

@stop