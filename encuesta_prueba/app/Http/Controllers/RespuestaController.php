<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuestas;


class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $respuestas = Respuestas::all();
        return $respuestas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request -> all();
        Respuestas::create($input);
        return \response()->json(['res' => true, 'message'=> 'Ingresado Correctamente'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $respuestas = Respuestas::find($id);
        return $respuestas;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request ->all();
        $respuestas = Respuestas::find($id);
        $respuestas->update($input);
        return \response()->json(['res' => true, 'message'=> 'Modificado Correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Respuestas::destroy($id);
        return \response()->json(['res' => true, 'message'=> 'Eliminado Correctamente'],200);
    }
}
