<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiesta;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiestas = Fiesta::where('fecha', '>=', now())
            ->withCount('participantes')
            ->get();

        return view('usuario.fiestas.index',compact('fiestas'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Fiesta $fiesta)
    {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'telefono' => 'required|string|max:255'
            ]);


            //Regla de negocio , verificar si la fiesta esta llena
            if ($fiesta->estaLlena()) {
                return back()->with('error','lo sentimos la fiesta esta llena');

            }

            
            //Regla de negocio , verificar si email ya esta registraodo en la fiesta
            $yaRegistrado = Participante::where('fiesta_id', $fiesta->id)
                ->where('email', $request->email)
                ->exists();


            if($yaRegistrado) {
                return back()->with('error','email ya registrado en la fiesta');
            }


            Participante::create([
                'fiesta_id' => $fiesta->id,
                'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
            ]);

            return redirect()->route('fiestas.lista')
                ->with('success','Registrado exitosamente');

            
    }

    /**
     * Display the specified resource.
     */
    public function show(Fiesta $fiesta)
    {
        return view('usuario.fiestas.show',compact('fiesta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
