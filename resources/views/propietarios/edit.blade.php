<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propietario</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Editar Propietario</h1>

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

        <form action="{{ route('propietarios.update', $propietario) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $propietario->nombre }}" required>
                @error('nombre')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido_pat">Apellido Paterno:</label>
                <input type="text" id="apellido_pat" name="apellido_pat" value="{{ $propietario->apellido_pat }}" required>
                @error('apellido_pat')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido_mat">Apellido Materno:</label>
                <input type="text" id="apellido_mat" name="apellido_mat" value="{{ $propietario->apellido_mat }}" required>
                @error('apellido_mat')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" value="{{ $propietario->telefono }}" required>
                @error('telefono')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ $propietario->direccion }}" required>
                @error('direccion')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="btn-group">
                <button type="submit" class="btn">Actualizar Propietario</button>
                <a href="{{ route('propietarios.show', $propietario) }}" class="btn" style="background-color: #6c757d;">Cancelar</a>
            </div>
        </form>

        <hr>
        <p>
            <a href="{{ route('propietarios.index') }}">Volver a Propietarios</a>
            <a href="/">Volver al inicio</a>
        </p>
    </div>
</body>
</html>
