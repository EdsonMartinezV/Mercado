<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reestablecer Contraseña</title>
</head>
<body>
    @include ('header2')
    <form action="/supervise/save-user-password/{{ $user->id }}" method="POST">
        <input type="text" name="oldPassword" id="" value="{{ $user->password }}">
        <input type="password" name="newPassword" id="" placeholder="Nueva Contraseña">
        <input type="submit" value="Guardar Contraseña">
    </form>
</body>
</html>