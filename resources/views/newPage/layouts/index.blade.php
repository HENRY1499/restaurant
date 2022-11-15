<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('newPage/css/styles.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>DoñaPitty</title>
</head>

<body>
    <header>
        <div class="background">
            <div class="container navbar">
                <div class="info">
                    <div class="titulo">
                        <p>
                            <span>
                                <h1 class="fw-light fst-italic">Doña Pitty</h1>
                            </span>
                        </p>
                    </div>
                    <div class="eslogan">
                        <span class="fw-semibold fst-italic">Restaurant - Catering</span>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="{{route('inicio')}}">Bienvenido</a></li>
                            <li><a href="{{route('cartas')}}">Carta</a></li>
                            <li><a href="{{route('reserva')}}">Reservación</a></li>
                            <li><a href="{{route('mesa')}}">Locales</a></li>
                            <li><a href="#">Fotos</a></li>
                            <li><a href="{{route('salir')}}">Salir</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container d-block">
        @yield('content')

    </div>

    <footer>

        <div class="row">
            <div class="col-md-3">
                <div class="img_circle">
                    <img src="{{asset('newPage/img/fondo_1.jpg')}}">
                </div>
                <div class="__title_footer">
                    Doña Pitty Restaurant
                    </br>
                    <span>Restaurant - Catering</span>
                </div>
            </div>
            <div class="col-md-3">
                <span>Más Pedidos</span>
                <ul>
                    <li><a class="link" href="#">Cabrito</a></li>
                    <li><a class="link" href="#">Combinado Simple</a></li>
                    <li><a class="link" href="#">Shambar</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <span>Ubicanos</span>
                <p>Estamos ubicados en la Esperanza</p>
                <ul>
                    <li>Dirección: <a class="link" href="#">Av. Tahuantinsuyo N°1010, La Esperanza 13012</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <span>Contactanos</span>
                <p>Puede contactarnos a travez de los siguientes números:</p>
                <ul>
                    <li>Celular: <a class="link" href="#">999999999</a></li>
                    <li>Whatsapp: <a class="link" href="#">922516022</a></li>
                </ul>
                <p>Puede contactarnos a travez de nuestras redes sociales:</p>
                <ul>
                    <li>Facebook: <a class="link" href="https://www.facebook.com/PITTYRESTAURANT">Doña Pitty</a></li>
                    <li>Instagram: <a class="link" href="#">@doñapitty</a></li>
                </ul>

            </div>
        </div>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>