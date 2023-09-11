<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/contacto" method="POST">
        <h3>{{ $tipo }}</h3>
        @csrf
        <label for="correo">Correo:</label><br>
        <input 
        type="email" 
        name="correo" 
        @if ($tipo == 'alumno')
            value="@alumnos.udg.mx"
        @else
            value="@gmail.com"
        @endif
        ><br>
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">

        </textarea><br>
        @error('comentario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="tipo">Tipo:</label><br>
        <select name="tipo" >
            <option value="Alumno">Alumno</option>
            <option value="Empleado">Empleado</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>