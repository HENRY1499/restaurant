@extends('admin.layouts.auth.index')
@section('auth')
<form action="{{route('user.check')}}" method="POST">
    @csrf
    <div class="row container" id="register">
        <div class="col-sm-6">
            <div class="text-center">
                <h3>Ingresar</h3>
                <span>Solo para personal Administrativo</span>
            </div>
            <div>

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
                        <a href="{{route('user.register')}}">Registrarse</a>
                    </div>
                </div>
                <div>
                    <button class="btn btn-block btn-success" type="submit">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection