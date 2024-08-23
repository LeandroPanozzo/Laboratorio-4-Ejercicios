<!DOCTYPE html>
<html>
<head>
    <title>Calcular Promedio</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ingresar Calificaciones</h1>
        <form action="/calcular-promedio" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <input type="number" name="calificaciones[]" class="form-control" placeholder="Calificación 1" required>
            </div>
            <div class="mb-3">
                <input type="number" name="calificaciones[]" class="form-control" placeholder="Calificación 2" required>
            </div>
            <div class="mb-3">
                <input type="number" name="calificaciones[]" class="form-control" placeholder="Calificación 3" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Promedio</button>
        </form>
    </div>
    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
