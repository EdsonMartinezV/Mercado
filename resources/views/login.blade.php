<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    @include ('header2')

    <form action="/user-login" method="POST">
        @csrf
        <input type="email" name="name" id="" placeholder="Correo Electrónico">
        <input type="password" name="name" id="" placeholder="Contraseña">
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>