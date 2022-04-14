<?php

namespace App\Http\Controllers;

use App\Models\Jurado;
use Illuminate\Http\Request;


class JuradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jurados = Jurado::paginate(5);
        return view('jurados.index', compact('jurados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurados.crear');
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
        request()->validate([
            'nombres_jurado' => 'required',
            'apellidos_jurado' => 'required',
            'numero_jurado' => 'numeric|min:900000000|max:999999999',
            'dni_jurado' => 'required',
        ]);
        Jurado::create($request->all());
        return redirect()->route('jurados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurado $jurado)
    {
        //
        return view('jurados.editar', compact('jurado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurado $jurado)
    {
        //
        request()->validate([
            'nombres_jurado' => 'required',
            'apellidos_jurado' => 'required',
            'numero_jurado' => 'numeric|min:900000000|max:999999999',
            'dni_jurado' => 'required',
        ]);
        $jurado->update($request->all());
        return redirect()->route('jurados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurado $jurado)
    {
        //
        $jurado->delete();
        return redirect()->route('jurados.index');
    }
}
