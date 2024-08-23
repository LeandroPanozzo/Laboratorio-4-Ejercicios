<!DOCTYPE html>
<html>
<head>
    <title>Registrar Contacto</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registrar Información de Contacto</h1>
        <form action="/registrar-contacto" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
            </div>
            <div class="mb-3">
                <input type="text" name="direccion" class="form-control" placeholder="Dirección" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Contacto</button>
        </form>

        <h2 class="text-center mt-5">Contactos Registrados</h2>
        <ul class="list-group mt-3">
            @foreach($contactos as $contacto)
                <li class="list-group-item">{{ $contacto['nombre'] }} - {{ $contacto['telefono'] }} - {{ $contacto['direccion'] }}</li>
            @endforeach
        </ul>
    </div>
    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

