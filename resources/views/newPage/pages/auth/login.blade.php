@extends('newPage.layouts.auth')
@section('auth')
<form action="{{route('auth.check')}}" method="POST">
    @csrf
    <div class="row container" id="register">
        <div class="col-sm-6">
            <div class="text-center">
                <h5>Doña Pitty</h5>
                <span class="lh-lg">What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
            </div>

        </div>

        <div class="col-sm-6">
            <div class="text-center">
                <h3>Login</h3>
            </div>
            <div>
                <form action="{{route('auth.check')}}" method="POST">
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    @csrf

                    <div class="col-md-12  mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" required>
                        <span class="text-danger">@error('correo'){{$message}} @enderror</span>
                    </div>
                    <div class="col-md-12  mb-3">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña" required>
                    </div>
                    <div class="row container mb-2">
                        <div class="col-md-10">
                            <span class="fw-light">¿Aún no te encuentras registrado?.</span>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('auth.register')}}">Registrarse</a>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-block btn-success" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</form>
@endsection