<table>
    @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->paginas }}</td>
            <td>{{ $libro->precio }}</td>
            <td><a href="{{ route('libros.edit', $libro->id) }}">Editar</a></td>
            <td><a href="{{ route('libros.destroy', $libro->id) }}">Eliminar</a></td>
        </tr>
    @endforeach
</table>