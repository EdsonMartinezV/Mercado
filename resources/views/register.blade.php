<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    @include ('header2')

    <form action="/register-new-user" method="POST">
        @csrf
        <input type="text" name="name" id="" placeholder="Nombre">
        <input type="email" name="email" id="" placeholder="Correo Electrónico">
        <input type="password" name="password" id="" placeholder="Contraseña">
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>