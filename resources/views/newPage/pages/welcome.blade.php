@extends('newPage.layouts.index')
@section('content')
<div>
    <div class="container">
        <div class="row description">
            <div class="col-md-6 __left">
                <div>
                    <h3>Descripción</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-md-6 __rigth">
                <img src="{{asset('newPage/img/fondo_1.jpg')}}">
            </div>
        </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('newPage/img/Nike.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('newPage/img/Puma - 39.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <h1 class="mt-5 mb-0">Ofrecemos</h1>
        <div class="_carta">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('newPage/img/Reebok - 38.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ceviche Simple</h5>
                    <p class="card-text">Plato bandera del Perú.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Personal: <span>$20.00</span></li>
                    <li class="list-group-item">Fuente: <span>$30.00</span></li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link float-end">Ver más ...</a>
                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection