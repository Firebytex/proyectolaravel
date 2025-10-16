<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1> ver fiestas disponibles</h1>

    
    <table>
        @forelse($fiestas as $fiesta)
        <tr>
            <th>Nombre fiesta</th>
            <td>{{ $fiesta->nombre_fiesta }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{$fiesta->fecha }}</td>
        </tr>
        <tr>
            <th>Lugar fiesta</th>
            <td>{{ $fiesta->lugar }}</td>
        </tr>
        <tr>
            <th>Nombre Maximo</th>
            <td>{{ $fiesta->cupo_maximo }}</td>
        </tr>
        <tr>
            <th>Editar</th>
            <td><a href="{{ route('fiestas.edit',$fiesta) }}">Editar fiesta</a></td>
        </tr>
        <tr>
            <th>Eliminar fiesta</th>
            <td>

                <form method="POST" action="{{ route('fiestas.destroy',$fiesta) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar fiesta</button>
                </form> 
                
            </td>
        </tr>

        <tr>
            <td><strong><a href="{{ route('fiestas.participantes',$fiesta) }}">Ver participantes</a></strong></td>
        </tr>
        @empty
            <tr>
                <td>No hay fiestas para registrarse</td>
            </tr>
        @endforelse
    </table>


    <br><br><br>
    <h2>Crear una fiesta</h2>
    <a href="{{ route('fiestas.create') }}">Crea tu fiesta</a>

    


</body>
</html>