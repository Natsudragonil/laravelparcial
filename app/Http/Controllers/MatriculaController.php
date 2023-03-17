<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Materia;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriculas = Matricula::all();
        return view('matricula.index')->with('matriculas',$matriculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matricula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Codigo funcional

        $matricula = new Matricula();

        $matricula->id_Matricula = $request->get('id_Matricula');

        $matricula->id_Matricula = $request->get('id_Matricula');

        $matricula->save();

        return redirect('/matriculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_Matricula
     * @return \Illuminate\Http\Response
     */
    public function show($id_Matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_Matricula
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Matricula)
    {
        //$matricula = Matricula::find($id_Matricula);
        //return view('matricula.edit')->with('matricula',$matricula);
        return redirect('/matriculas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_Matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Matricula)
    {
        //$matricula = Matricula::find($id_Matricula);

        //$matricula->id_Matricula = $request->get('id_Matricula');

        //$matricula->save();

        return redirect('/matriculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_Matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Matricula)
    {
        //$matricula = Matricula::find($id_Matricula);

        //$matricula->delete();

        return redirect('/matriculas');
    }
}
