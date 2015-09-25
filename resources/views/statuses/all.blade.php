@extends('masterpage')


@section('content')
    @if($statuses != null)
        <h1 class="page-heading">Status</h1>
        <ul class="list-group">
        @foreach($statuses as $status)
                <li class="list-group-item">
                    <span class="badge bg-success">{!! link_to('statuses/' . $status->id ,'Ver',null) !!}</span>
                    Número de status : {!! $status->id !!} - {!! $status->description_es !!}
                </li>
        @endforeach
        </ul>
    @elseif(!$statuses)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading text-center">No tienen status.</h1>
                </div>
            </div>
        </div>
    @endif

@stop
