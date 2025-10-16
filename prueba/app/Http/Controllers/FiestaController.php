<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiesta;

class FiestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiestas = Fiesta::withCount('participantes')->get();
        return view('admin.fiestas.index',compact('fiestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fiestas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_fiesta' => 'required|string|max:255',
            'fecha' => 'required|date',
            'lugar' => 'required|string|max:255',
            'cupo_maximo' => 'required|numeric'
        ]);

        Fiesta::create($request->all());

        return redirect()->route('fiestas.index')
            ->with('success','Fiesta creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fiesta $fiesta)
    {
        return view('admin.fiestas.edit',compact('fiesta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Fiesta $fiesta)
    {
        $request->validate([
            'nombre_fiesta' => 'required|string|max:255',
            'fecha' => 'required|date',
            'lugar' => 'required|string|max:255',
            'cupo_maximo' => 'required|numeric'
        ]);

        $fiesta->update($request->all());

        return redirect()->route('fiestas.index')
            ->with('success','Actualizado correctamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fiesta $fiesta)
    {
        $fiesta->delete();

        return redirect()->route('fiestas.index')
            ->with('success','borrado correctamente');
    }



    //ver participamtes
    public function participantes(Fiesta $fiesta) {
        $participantes = $fiesta->participantes;
        //trae todos los participantes que pertenezcan a ese id de esa fiesta

        return view('admin.fiestas.participantes',compact('fiesta','participantes'));

    }
    
}
