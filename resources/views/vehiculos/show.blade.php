<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Vehículo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Detalles del Vehículo</h1>

        <table>
            <tr>
                <th>ID</th>
                <td>{{ $vehiculo->id }}</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>{{ $vehiculo->marca }}</td>
            </tr>
            <tr>
                <th>Modelo</th>
                <td>{{ $vehiculo->modelo }}</td>
            </tr>
            <tr>
                <th>Año</th>
                <td>{{ $vehiculo->anio }}</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{{ $vehiculo->color }}</td>
            </tr>
            <tr>
                <th>Placa</th>
                <td>{{ $vehiculo->placa }}</td>
            </tr>
            <tr>
                <th>Número de Serie</th>
                <td>{{ $vehiculo->numero_serie }}</td>
            </tr>
            <tr>
                <th>Tipo de Combustible</th>
                <td>{{ $vehiculo->tipo_combustible }}</td>
            </tr>
            <tr>
                <th>Propietario</th>
                <td>
                    @if($vehiculo->propietario)
                        <a href="{{ route('propietarios.show', $vehiculo->propietario) }}">
                            {{ $vehiculo->propietario->nombre }} {{ $vehiculo->propietario->apellido_pat }} {{ $vehiculo->propietario->apellido_mat }}
                        </a>
                    @else
                        Sin asignar
                    @endif
                </td>
            </tr>
            <tr>
                <th>Creado</th>
                <td>{{ $vehiculo->created_at }}</td>
            </tr>
            <tr>
                <th>Actualizado</th>
                <td>{{ $vehiculo->updated_at }}</td>
            </tr>
        </table>

        <hr>
        <div class="btn-group">
            <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn">Editar Vehículo</a>
            <a href="{{ route('vehiculos.index') }}" class="btn" style="background-color: #6c757d;">Volver a Vehículos</a>
            <a href="/" class="btn" style="background-color: #6c757d;">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
