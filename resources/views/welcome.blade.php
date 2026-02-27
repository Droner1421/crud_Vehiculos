<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Vehículos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Sistema de Gestión de Vehículos</h1>
        
        <div class="btn-group" style="justify-content: center;">
            <a href="{{ route('propietarios.index') }}" class="btn">Gestionar Propietarios</a>
            <a href="{{ route('vehiculos.index') }}" class="btn">Gestionar Vehículos</a>
        </div>
    </div>
</body>
</html>
