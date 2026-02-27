<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Propietario</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Detalles del Propietario</h1>

        <table>
            <tr>
                <th>ID</th>
                <td>{{ $propietario->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $propietario->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido Paterno</th>
                <td>{{ $propietario->apellido_pat }}</td>
            </tr>
            <tr>
                <th>Apellido Materno</th>
                <td>{{ $propietario->apellido_mat }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $propietario->telefono }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $propietario->direccion }}</td>
            </tr>
            <tr>
                <th>Creado</th>
                <td>{{ $propietario->created_at }}</td>
            </tr>
            <tr>
                <th>Actualizado</th>
                <td>{{ $propietario->updated_at }}</td>
            </tr>
        </table>

        <h2>Vehículos de este Propietario</h2>
        @if($propietario->vehiculos->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Placa</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($propietario->vehiculos as $vehiculo)
                        <tr>
                            <td>{{ $vehiculo->id }}</td>
                            <td>{{ $vehiculo->marca }}</td>
                            <td>{{ $vehiculo->modelo }}</td>
                            <td>{{ $vehiculo->anio }}</td>
                            <td>{{ $vehiculo->color }}</td>
                            <td>{{ $vehiculo->placa }}</td>
                            <td>
                                <a href="{{ route('vehiculos.show', $vehiculo) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Este propietario no tiene vehículos registrados</p>
        @endif

        <hr>
        <div class="btn-group">
            <a href="{{ route('propietarios.edit', $propietario) }}" class="btn">Editar Propietario</a>
            <a href="{{ route('propietarios.index') }}" class="btn" style="background-color: #6c757d;">Volver a Propietarios</a>
            <a href="/" class="btn" style="background-color: #6c757d;">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
