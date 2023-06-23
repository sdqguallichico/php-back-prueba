<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preguntas;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $preguntas = Preguntas::all();
        return $preguntas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request -> all();
        Preguntas::create($input);
        return \response()->json(['res' => true, 'message'=> 'Ingresado Correctamente'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $preguntas = Preguntas::find($id);
        return $preguntas;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request ->all();
        $preguntas = Preguntas::find($id);
        $preguntas->update($input);
        return \response()->json(['res' => true, 'message'=> 'Modificado Correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Preguntas::destroy($id);
        return \response()->json(['res' => true, 'message'=> 'Eliminado Correctamente'],200);
    }
}
