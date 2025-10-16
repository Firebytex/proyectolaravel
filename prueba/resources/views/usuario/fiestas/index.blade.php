@extends('layout')


@section('title','index usuario')

@section('content')
<h1>Inscribite a una fiesta</h1>

    <div>
        @forelse($fiestas as $fiesta)
        <h3>{{ $fiesta->nombre_fiesta }}</h3>
        <p><strong>{{ $fiesta->fecha }}</strong></p>
        <p><strong>{{ $fiesta->lugar }}</strong></p>
        <p><strong>Cupos disponibles:{{ $fiesta->cuposDisponibles() }} / Cupos maximo:{{ $fiesta->cupo_maximo }}</strong></p>
        

        @if($fiesta->estaLlena())
            <button disabled>FIESTA LLENA NO HAY CUPOS</button>
        @else
            <a href="{{ route('fiestas.detalle',$fiesta) }}">
                <button>Registrarme</button>
            </a>
        @endif
    </div>

    @empty
        <p>No hay fiestas disponibles en este momento</p>
    @endforelse


@endsection