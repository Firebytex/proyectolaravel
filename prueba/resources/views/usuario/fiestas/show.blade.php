@extends('layout')


@section('title','registrarse en la fiesta')



@section('content')

<div>
    <h3>Informacion de la fiesta</h3>
    <p><strong>{{ $fiesta->fecha }}</strong></p>
    <p><strong>{{ $fiesta->lugar }}</strong></p>
    <p><strong>{{ $fiesta->cuposDisponibles() }} / {{ $fiesta->cupo_maximo }}</strong></p>
</div>


@if($fiesta->estaLlena())
    <div>
        <h4>Lo sentimos esta fiesta está llena puedes buscar otra</h4>
        <a href="{{ route('fiestas.lista') }}">Ver otras fiestas</a>
    </div>

@else 

<h4>Completa tus datos de registro</h4>


<form method="POST" action="{{ route('fiestas.registrarse',$fiesta) }}">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">


    <label for="email">email</label>
    <input type="email" name="email" id="email">


    <label for="telefono">telefono</label>
    <input type="text" name="telefono" id="telefono">


    <button type="submit">Registrarme en la party</button>
    <a href="{{ route('fiestas.lista') }}"><button>Cancelar</button></a>

</form>

@endif


@endsection