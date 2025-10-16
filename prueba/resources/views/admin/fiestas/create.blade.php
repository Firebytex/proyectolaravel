@extends('layout')

@section('title','create de fiestas')

@section('content')

<h1>Creando la fiesta</h1>


<form method="POST" action="{{ route('fiestas.store') }}">
    @csrf

    
    <div>
    <label for="nombre">Nombre fiesta</label>
    <input type="text" name="nombre_fiesta" id="nombre">
    @error('nombre_fiesta')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>
    
    <div>
    <label for="fecha">Fecha fiesta</label>
    <input type="date" name="fecha" id="fecha">

    @error('fecha')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>


    <div>
    <label for="lugar">Lugar fiesta</label>
    <input type="text" name="lugar" id="lugar">

    @error('lugar')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>


    <div>
    <label for="cupo">Cupo fiesta</label>
    <input type="number" name="cupo_maximo" id="cupo" min="1" max="100">


    @error('cupo_maximo')
        <span style="color:red">{{ $message }}</span>
    @enderror

    </div>

    <button type="submit">Crear fiesta</button>

</form>

<br>
<a href="{{ route('fiestas.index') }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</a>



@endsection





