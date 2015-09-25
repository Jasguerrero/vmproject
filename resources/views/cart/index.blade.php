!@extends('masterpage')

@section('content')
    <h1 class="page-header">Pedidos</h1>
    @if($carts)
    <table class="table table-hover custom-check">
            <tr>
                <th>Huesped</th>
                <th>Cuarto</th>
                <th>Platillo</th>
                <th>Fecha</th>
                <th>Comentarios</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        <tbody>
            @foreach($carts as $cart)
                <tr>
                    <td>
                        {{ \App\User::find($cart->user_id)->name }}
                    </td>
                    <td>
                        {!! \App\User::find($cart->user_id)->room !!}
                    </td>
                    <td>
                        {!! \App\Dish::find($cart->dish_id)->description_es !!}
                    </td>
                    <td>
                        {{ $cart->created_at->diffForHumans() }}
                    </td>
                    <td>
                        {!! $cart->comments !!}
                    </td>
                    <td>
                        ${{ \App\Dish::find($cart->dish_id)->price }}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['CartController@destroy', $cart->id]]) !!}

                            {!! Form::submit('Delete',['class' => 'btn btn-default btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <h1 class="header">¡No hay pedidos!</h1>
    @endif
@stop

@section('extra_scripts')
    <script>
        var time = new Date().getTime();

        function refresh() {
            if(new Date().getTime() - time >= 15000)
                window.location.reload(true);
            else
                setTimeout(refresh, 1000);
        }

        setTimeout(refresh, 1000);
    </script>
@stop
