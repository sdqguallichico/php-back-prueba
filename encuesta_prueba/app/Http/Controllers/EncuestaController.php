<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuestas;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $encuestas = Encuestas::all();
        return $encuestas;
    }

    /**
     * Store a newly created resource in storage.
     */
    //INSERTAR NUEVOS REGISTROS
    public function store(Request $request)
    {
        //
        $input = $request -> all();
        Encuestas::create($input);
        return \response()->json(['res' => true, 'message'=> 'Ingresado Correctamente'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $encuesta = Encuestas::find($id);
        return $encuesta;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request ->all();
        $encuesta = Encuestas::find($id);
        $encuesta->update($input);
        return \response()->json(['res' => true, 'message'=> 'Modificado Correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Encuestas::destroy($id);
        return \response()->json(['res' => true, 'message'=> 'Eliminado Correctamente'],200);
    }
}
