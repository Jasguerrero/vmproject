@extends('masterpage')

@section('content')
    <h1 class="page-header">Pedidos</h1>
    @if($carts)
    <table>
        <thead>
            <th>Huesped</th>
            <th>Cuarto</th>
            <th>Platillo</th>
            <th>Precio</th>
        </thead>
        <tbody>
            @foreach($carts as $cart)
                <td>
                    {{ Auth::user()->name }}
                </td>
                <td>
                    {{ Auth::user()->room }}
                </td>
                <td>
                    {{ \App\Dish::find($cart->dish_id)->description_es }}
                </td>
                <td>
                    ${{ \App\Dish::find($cart->dish_id)->price }}
                </td>
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
