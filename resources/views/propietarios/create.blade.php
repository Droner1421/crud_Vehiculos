<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Propietario</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Propietario</h1>

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

        <form action="{{ route('propietarios.store') }}" method="POST">
        @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido_pat">Apellido Paterno:</label>
                <input type="text" id="apellido_pat" name="apellido_pat" value="{{ old('apellido_pat') }}" required>
                @error('apellido_pat')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido_mat">Apellido Materno:</label>
                <input type="text" id="apellido_mat" name="apellido_mat" value="{{ old('apellido_mat') }}" required>
                @error('apellido_mat')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                @error('telefono')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
                @error('direccion')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="btn-group">
                <button type="submit" class="btn">Crear Propietario</button>
                <a href="{{ route('propietarios.index') }}" class="btn" style="background-color: #6c757d;">Cancelar</a>
            </div>
        </form>

        <hr>
        <p>
            <a href="/">Volver al inicio</a>
        </p>
    </div>
</body>
</html>
