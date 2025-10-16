@extends('layout')

@section('title','viendo participantes')



@section('content')



<div>
    <strong>Fecha</strong> {{ $fiesta->fecha }} <br>
    <strong>lugar</strong> {{ $fiesta->lugar }} <br>
    <strong>Cupo maximo</strong> {{ $fiesta->cupo_maximo }} <br>
    <strong>Inscritos</strong> {{ $participantes->count() }} <br>
    <strong>Disponibles</strong> {{ $fiesta->cuposDisponibles() }} <br>
</div>



<table>
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th>telefono</th>
        <th>fecha registro</th>
    </thead>
    <tbody>
        @forelse($participantes as $participante)
        <tr>
            <td>{{ $participante->id }}</td>
            <td>{{ $participante->nombre }}</td>
            <td>{{ $participante->email }}</td>
            <td>{{ $participante->telefono }}</td>
            <td>{{ $participante->created_at }}</td>
        </tr>

        @empty
        <tr>
            <td>No hay participantes inscritos</td>
        </tr>

        @endforelse
    </tbody>
</table>



@endsection