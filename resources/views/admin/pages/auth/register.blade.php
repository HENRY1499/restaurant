@extends('admin.layouts.auth.index')
@section('auth')
<form action="{{route('user.save')}}" method="POST">
    @csrf
    <div class="container">
        <div>
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
        </div>
        <div class="col-md-12  mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" required>
        </div>
        <div class="col-md-12  mb-3">
            <label for="contraseña" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña" required>
        </div>
        <div class="col-md-12  mb-3">
            <label for="contraseña" class="form-label">Imagen:</label>
            <input type="text" class="form-control" id="imagen" placeholder="Imagen" name="imagen" required>
        </div>
        <div>
            <button class="btn btn-block btn-success" type="submit">Registrarse</button>
        </div>
    </div>
</form>
@endsection