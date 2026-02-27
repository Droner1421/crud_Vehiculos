<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Listado de Propietarios</h1>
        
        <div class="btn-group">
            <a href="{{ route('propietarios.create') }}" class="btn">Crear nuevo propietario</a>
            <a href="/" class="btn" style="background-color: #6c757d;">Volver al inicio</a>
        </div>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($propietarios->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($propietarios as $propietario)
                        <tr>
                            <td>{{ $propietario->id }}</td>
                            <td>{{ $propietario->nombre }}</td>
                            <td>{{ $propietario->apellido_pat }}</td>
                            <td>{{ $propietario->apellido_mat }}</td>
                            <td>{{ $propietario->telefono }}</td>
                            <td>{{ $propietario->direccion }}</td>
                            <td>
                                <div class="action-links">
                                    <a href="{{ route('propietarios.show', $propietario) }}">Ver</a>
                                    <a href="{{ route('propietarios.edit', $propietario) }}">Editar</a>
                                    <form action="{{ route('propietarios.destroy', $propietario) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay propietarios registrados</p>
    @endif

    <hr>
    <p>
        <a href="/">Volver al inicio</a>
    </p>
</body>
</html>
