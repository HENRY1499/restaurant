<?php



namespace App\Http\Controllers\newPage;

/**Model */

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newPage.pages.auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('newPage.pages.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validad peticiones
        $request->validate([
            'nombres' => 'required|min:5|max:20',
            'apellidos' => 'required|min:5|max:20',
            'dni' => 'required|min:8',
            'correo' => 'required|email|unique:clientes',
            'contraseña' => 'required|min:5|max:10'
        ]);

        //iNSERT DATA INFO DATA BASE
        $cliente = new cliente();

        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->correo = $request->correo;
        $cliente->contraseña = Hash::make($request->contraseña);

        $save = $cliente->save();

        if ($save) {
            return back()->with('success', 'Registrado');
        } else {
            return back()->with('fail', 'Ocurrio un fallo');
        }
        return redirect('auth/login');
    }
    public function check(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required|min:5|max:10'
        ]);

        $clienteinfo = cliente::where('correo', '=', $request->correo)->first();

        if (!$clienteinfo) {
            return back()->with('fail', 'Ocurrio un fallo');
        } else {
            if (Hash::check($request->contraseña, $clienteinfo->contraseña)) {
                $request->session()->put('LoggedUser', $clienteinfo->id_cliente);
                return redirect('inicio');
            } else {
                return back()->with('fail', 'Contraseña Incorrecta');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('auth/login');
        }
    }
}
