<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Calificaciones</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ingresar Calificaciones</h1>
        <form action="/calcular-promedio" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="calificacion1" class="form-label">Calificación 1</label>
                <input type="number" name="calificaciones[]" id="calificacion1" class="form-control" step="0.01" placeholder="Calificación 1" required>
            </div>
            <div class="mb-3">
                <label for="calificacion2" class="form-label">Calificación 2</label>
                <input type="number" name="calificaciones[]" id="calificacion2" class="form-control" step="0.01" placeholder="Calificación 2" required>
            </div>
            <div class="mb-3">
                <label for="calificacion3" class="form-label">Calificación 3</label>
                <input type="number" name="calificaciones[]" id="calificacion3" class="form-control" step="0.01" placeholder="Calificación 3" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Promedio</button>
        </form>
    </div>
    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

