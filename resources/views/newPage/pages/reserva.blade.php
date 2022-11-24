@extends('newPage.layouts.index')
@section('content')
<div class="container">
    <ul>
        @foreach($reservas as $reserva)
        <li style="color: black">{{$reserva->id_reserva}}</li>
        <p>{{$reserva->cliente->nombres}}</p>
        <p>{{$reserva->cliente->apellidos}}</p>
        <p>{{$reserva->cliente->dni}}</p>
        <p>{{$reserva->mesa->estados->estado}}</p>
        <p>{{$reserva->hora}}</p>
        <p>{{$reserva->fecha}}</p>
        @endforeach
    </ul>
</div>
@endsection