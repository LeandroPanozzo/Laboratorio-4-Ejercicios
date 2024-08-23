<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Promedio</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">El promedio es: {{ $promedio }}</h1>
        <div class="text-center mt-4">
            <a href="/calificaciones" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

