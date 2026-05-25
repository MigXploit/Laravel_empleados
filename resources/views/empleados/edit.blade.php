<!DOCTYPE html>
<html>
<head>
    <title>Editar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Editar Empleado</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Revisa los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Cargo:</label>
            <input type="text" name="cargo" value="{{ $empleado->cargo }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Salario:</label>
            <input type="number" step="0.01" name="salario" value="{{ $empleado->salario }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Fecha de Contratación:</label>
            <input type="date" name="fecha_contratacion" value="{{ $empleado->fecha_contratacion }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
