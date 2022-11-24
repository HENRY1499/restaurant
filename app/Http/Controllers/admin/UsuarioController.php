<?php

namespace App\Http\Controllers\admin;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('admin.pages.auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view(('admin.pages.auth.login'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // Validar Peticiones
        $request->validate([
            'correo' => 'required|email|unique:usuarios',
            'contraseña' => 'required|min:5|max:10',
            'imagen' => 'required'
        ]);

        // INSERTAR DATOS EN LA BASE DE DATOS
        $usuarios = new Usuario();

        $usuarios->correo = $request->correo;
        $usuarios->contraseña = Hash::make($request->contraseña);
        $usuarios->imagen = $request->imagen;

        $save = $usuarios->save();

        if ($save) {
            return back()->with('success', 'Usuario Registrado');
        } else {
            return back()->with('fail', 'Usuario No Registrado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required|min:5|max:10'
        ]);

        $usuariosInfo = Usuario::where('correo', '=', $request->correo)->first();
        if (!$usuariosInfo) {
            return back()->with('fail', 'El correo no es aceptado');
        } else {
            if (Hash::check($request->contraseña, $usuariosInfo->contraseña)) {
                $request->session()->put('AdminLogged', $usuariosInfo->id_usuario);
                return redirect('app');
            } else {
                return back()->with('fail', 'Contraseña Incorrecta');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function app()
    {
        return view('admin.layouts.app');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if (session()->has('AdminLogged')) {
            session()->pull('AdminLogged');
            return redirect('user/login');
        }
    }
}
