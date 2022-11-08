@extends('newPage.layouts.index')
@section('content')
<div class="container">
    <div class="card" style="width:18rem;">
        <img src="{{asset('newPage/img/Nike.png')}}" class="card-img-top" alt="...">
        <div class="card-body bg-success">
            <h5 class="card-title">Card Carta</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">
            <ul>
                @foreach($mesas as $mesa)
                <li>{{$mesa->id_mesa}}-{{$mesa->estados->estado}}</li>
                @endforeach
            </ul>
            </p>
        </div>
    </div>
</div>
@endsection