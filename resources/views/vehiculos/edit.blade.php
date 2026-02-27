<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehículo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Editar Vehículo</h1>

        @if ($errors->any())
            <div class="error-message">
                <h3>Errores de validación:</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="{{ $vehiculo->marca }}" required>
                @error('marca')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" value="{{ $vehiculo->modelo }}" required>
                @error('modelo')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="number" id="anio" name="anio" value="{{ $vehiculo->anio }}" required>
                @error('anio')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" id="color" name="color" value="{{ $vehiculo->color }}" required>
                @error('color')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" value="{{ $vehiculo->placa }}" required>
                @error('placa')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="numero_serie">Número de Serie:</label>
                <input type="text" id="numero_serie" name="numero_serie" value="{{ $vehiculo->numero_serie }}" required>
                @error('numero_serie')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tipo_combustible">Tipo de Combustible:</label>
                <input type="text" id="tipo_combustible" name="tipo_combustible" value="{{ $vehiculo->tipo_combustible }}" required>
                @error('tipo_combustible')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="propietario_id">Propietario:</label>
                <select id="propietario_id" name="propietario_id" required>
                    <option value="">-- Selecciona un propietario --</option>
                    @foreach($propietarios as $propietario)
                        <option value="{{ $propietario->id }}" {{ $vehiculo->propietario_id == $propietario->id ? 'selected' : '' }}>
                            {{ $propietario->nombre }} {{ $propietario->apellido_pat }} {{ $propietario->apellido_mat }}
                        </option>
                    @endforeach
                </select>
                @error('propietario_id')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="btn-group">
                <button type="submit" class="btn">Actualizar Vehículo</button>
                <a href="{{ route('vehiculos.show', $vehiculo) }}" class="btn" style="background-color: #6c757d;">Cancelar</a>
            </div>
        </form>

        <hr>
        <p>
            <a href="{{ route('vehiculos.index') }}">Volver a Vehículos</a>
            <a href="/">Volver al inicio</a>
        </p>
    </div>
</body>
</html>
