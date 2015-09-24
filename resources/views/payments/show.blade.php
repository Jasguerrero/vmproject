@extends('masterpage')


@section('content')
    @if($payment != null)
        <h1 class="page-heading">Número de forma de pago: {!! $payment->id !!}</h1>
        <hr/>
        <div class="container">
    <div class="row">
        <ul class="thumbnails">
            <div class="col-md-5 col-md-offset-3">
                <div class="thumbnail">
                    <div class="caption">
                         <h4>Nombre en Español: {!! $payment->description_es !!}</h4>
                        <hr/>
                         <h4>Nombre en Inglés: {!! $payment->description_en !!}</h4>
                         <hr/>
                        <h5>Fecha de Creación : {!! $payment->created_at->format('Y-m-d') !!}</h5>
                        <hr/>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                {!! link_to('payments/' .$payment->id. '/edit', 'Update',array('class' => 'btn btn-default btn-success center-block')) !!}
                            </div>
                            <div class="col-lg-6">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['PaymentController@destroy',$payment->id]]) !!}

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