<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
</head>
<body>
    <center>
        <br>
        <br>
        <form action="{{route('login')}}" method="POST">
        {{ csrf_field() }}
        <input type="text" name='usuario' placeholder="Introduzca su usuario">
        <br>
        <input type="text" name='password' placeholder="Introduzca su contraseña">
        <br>
        <input type="submit" value="iniciar sesion">
        </form>
    </center>
</body>
</html>