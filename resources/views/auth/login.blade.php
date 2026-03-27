<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>

<body>

    @extends('layouts.app')
    @section('content')
    <h1>Inicio de sesión</h1>
    <form action="{{ route('acceso.store') }}" method="POST">

        @csrf
        <input type="text" name="email" placeholder="Email" class="form-control"> 
        <br>      
        <input type="text" name="password" placeholder="Contraseña" class="form-control">
        <br>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    @endsection
</body>
</html>