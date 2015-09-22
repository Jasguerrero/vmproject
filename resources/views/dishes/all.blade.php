@extends('app')


@section('content')
    @if($dishes != null)
        <h1 class="page-heading">Platillos</h1>
        @foreach($dishes->chunk(5) as $Dishes)
            <div class="row">
                <div class="col-lg-12">
                    @foreach($Dishes as $dish)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{!! $dish->name !!}</h3>
                            </div>
                            <div class="panel-body">
                                {!! $dish->description_es !!}
                            </div>
                            <div class="panel-footer">{!! $dish->created_at->format('Y-m-d') !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        {!! $dishes->render() !!}
    @elseif(!$dishes)
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="page-heading">No has hecho ninguna sugencia</h1>
                </div>
            </div>
        </div>
    @endif
@stop