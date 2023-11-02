<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use App\Models\modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModelosController extends AuthController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $retorno = false;
        $request->validate([
            'nome_modelo' => 'required|string'
        ]);
        if (Auth::check()) {
            $model = new modelos();
            $retorno = $model->registrarModelo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modelos  $modelos
     * @return \Illuminate\Http\Response
     */
    public function show(modelos $modelos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modelos  $modelos
     * @return \Illuminate\Http\Response
     */
    public function edit(modelos $modelos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\modelos  $modelos
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $retorno = false;
        $request->validate([
            'nome_modelo' => 'required|string',
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new modelos();
            $retorno = $model->atualizarModelo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modelos  $modelos
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $retorno = false;
        $request->validate([
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new modelos();
            $retorno = $model->deletarModelo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
    }
}
