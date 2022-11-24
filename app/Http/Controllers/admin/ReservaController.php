<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva = Reserva::with('cliente', 'mesa')->get();

        return response()->json([
            'reserva' => $reserva
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Reserva::create([
            'hora' => $request->hora,
            'fecha' => $request->fecha,
            'comentario' => $request->comentario,
            'invitados' => $request->invitados,
            'id_cliente' => $request->id_cliente,
            'id_mesas' => $request->id_mesas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva, $id)
    {
        $reserva = Reserva::find($id);
        return response()->json($reserva);
    }

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
    public function update(Request $request, Reserva $reserva)
    {
        $reserva->fill($request->post())->save();
        return response()->json([
            'reserva' => $reserva
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva, $id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return response()->json([
            'mensaje' => 'reserva Eliminada'
        ]);
    }
}
