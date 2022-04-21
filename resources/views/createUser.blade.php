<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    @include ('header2')

    <form action="/supervise/save-user" method="POST">
        @csrf
        <label for="role">Rol: </label>
        <select name="role" id="role">
            <option value="supervisor">Supervisor</option>
            <option value="inCharge">Encargado</option>
            <option value="client">Cliente</option>
            <option value="counting">Contador</option>
        </select>
        <input type="text" name="name" id="" placeholder="Nombre">
        <input type="email" name="email" id="" placeholder="Correo Electrónico">
        <input type="password" name="password" id="" placeholder="Contraseña">
        <input type="submit" value="Crear">
    </form>
</body>
</html>