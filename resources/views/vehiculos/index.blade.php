<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Listado de Vehículos</h1>
        
        <div class="btn-group">
            <a href="{{ route('vehiculos.create') }}" class="btn">Crear nuevo vehículo</a>
            <a href="/" class="btn" style="background-color: #6c757d;">Volver al inicio</a>
        </div>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($vehiculos->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Placa</th>
                        <th>Tipo Combustible</th>
                        <th>Propietario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehiculos as $vehiculo)
                        <tr>
                            <td>{{ $vehiculo->id }}</td>
                            <td>{{ $vehiculo->marca }}</td>
                            <td>{{ $vehiculo->modelo }}</td>
                            <td>{{ $vehiculo->anio }}</td>
                            <td>{{ $vehiculo->color }}</td>
                            <td>{{ $vehiculo->placa }}</td>
                            <td>{{ $vehiculo->tipo_combustible }}</td>
                            <td>
                                @if($vehiculo->propietario)
                                    <a href="{{ route('propietarios.show', $vehiculo->propietario) }}">
                                        {{ $vehiculo->propietario->nombre }} {{ $vehiculo->propietario->apellido_pat }}
                                    </a>
                                @else
                                    Sin asignar
                                @endif
                            </td>
                            <td>
                                <div class="action-links">
                                    <a href="{{ route('vehiculos.show', $vehiculo) }}">Ver</a>
                                    <a href="{{ route('vehiculos.edit', $vehiculo) }}">Editar</a>
                                    <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display: inline;">
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
            <p><strong>No hay vehículos registrados.</strong></p>
        @endif
    </div>
</body>
</html>
