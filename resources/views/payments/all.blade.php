@extends('masterpage')


@section('content')
    @if($payments != null)
        <h1 class="page-heading">Formas de pago</h1>
        <ul class="list-group">
            @foreach($payments as $payment)
                <li class="list-group-item">
                    <span class="badge bg-success">{!! link_to('payments/' . $payment->id ,'Ver',null) !!}</span>
                    Número de categoria : {!! $payment->id !!}
                </li>
            @endforeach
        </ul>
    @elseif($payments == null)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No tienen categorias</h1>
                </div>
            </div>
        </div>
    @endif

@stop