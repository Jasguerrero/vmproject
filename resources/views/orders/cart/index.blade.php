@extends('layouts.master')

@section('content')
    <div align="center">
        <div style="padding: 10px">
            <paper-card heading ="Cart" elevation="3">
                <table class="card-content">
                <thead>
                <div style="padding-left: 20px;">
                <tr>
                    <th style="padding-right: 10px;">Nombre</th>
                    <th style="padding-right: 10px;">Cantidad</th>
                    <th style="padding-right: 10px;">Tiempo de espera</th>
                    <th style="padding-right: 10px;">Precio</th>
                </tr>
                    </div>
                </thead>

                <tbody>
                <tr>
                    <td style="padding-right: 10px;">Carne</td>
                    <td style="padding-right: 10px;">1</td>
                    <td style="padding-right: 10px;">20 min</td>
                    <td style="padding-right: 10px;">120.00</td>
                </tr>

                <tr>
                    <td style="padding-right: 10px;">Sandwich</td>
                    <td style="padding-right: 10px;">1</td>
                    <td style="padding-right: 10px;">15 min</td>
                    <td style="padding-right: 10px;">80.00</td>
                </tr>

                <tr>
                    <td style="padding-right: 10px;">Smoothie/Smoothie</td>
                    <td style="padding-right: 10px;">2</td>
                    <td style="padding-right: 10px;">5 min</td>
                    <td style="padding-right: 10px;">30.00</td>
                </tr>
                </tbody>
                </table>
                <div align="left" style="padding-left: 20px; padding-right: 20px;" >
                    <paper-input label="Comentarios/Comments" name="comment"></paper-input>
                </div>
                <br>
                <div class="card-actions">
                    <paper-button raised id="my-order-button">Ordenar/Order</paper-button>
                </div>
            </paper-card>
        </div>
    </div>
@endsection