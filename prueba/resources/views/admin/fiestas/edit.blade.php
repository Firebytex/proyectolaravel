@extends('layout')

@section('title','Editar fiesta')


@section('content')

<h1>Editando fiesta</h1>


<form method="POST" action="{{ route('fiestas.update',$fiesta) }}">
@csrf
@method('PUT')




<div>
    <label for="nombre">Nombre fiesta</label>
    <input type="text" name="nombre_fiesta" id="nombre" value="{{ old('nombre_fiesta',$fiesta->nombre_fiesta) }}">
    @error('nombre_fiesta')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>
    
    <div>
    <label for="fecha">Fecha fiesta</label>
    <input type="date" name="fecha" id="fecha" value="{{ old('fecha',$fiesta->fecha) }}">

    @error('fecha')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>


    <div>
    <label for="lugar">Lugar fiesta</label>
    <input type="text" name="lugar" id="lugar" value="{{ old('lugar',$fiesta->lugar) }}">

    @error('lugar')
        <span style="color:red">{{ $message }}</span>
    @enderror
    </div>


    <div>
    <label for="cupo">Cupo fiesta</label>
    <input type="number" name="cupo_maximo" id="cupo" min="1" max="100" value="{{ old('cupo_maximo',$fiesta->cupo_maximo) }}">


    @error('cupo_maximo')
        <span style="color:red">{{ $message }}</span>
    @enderror

    </div>

    <button type="submit" class="bg-color-green">Editar fiesta</button>


</form>



@endsection