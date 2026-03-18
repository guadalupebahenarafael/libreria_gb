<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
    <h1>Agregar nuevo libro</h1>
    <br><br>

    <form action="{{ route('libros.store') }}" method="POST">

        <!-- Manejo de la información por parte de laravel-->
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="autor" placeholder="Autor" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-pencil"></i></i></span>
            <input type="text" name="editorial" placeholder="Editorial" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-dollar-sign"></i></span>
            <input type="number" name="precio" placeholder="Precio" class="form-control">
        </div>

        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        
    </form>
    
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('libros.index') }}" class="btn btn-outline-success">
                <i class="fa-solid fa-eye"></i> Ver libros
            </a>
        </div>
    
    @endsection
</body>
</html>