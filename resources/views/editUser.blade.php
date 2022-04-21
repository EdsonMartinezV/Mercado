<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}</title>
</head>
<body>
    @include ('header2')
    <form action="/supervise/update-user" method="POST">
        @method('PUT')
        @csrf
        <label for="role">Rol: </label>
        <select name="role" id="role" value="{{ $user->role }}">
            <option value="supervisor">Supervisor</option>
            <option value="inCharge">Encargado</option>
            <option value="client">Cliente</option>
            <option value="counting">Contador</option>
        </select>
        <input type="text" name="name" id="" placeholder="Nombre" value="{{ $user->name }}">
        <input type="email" name="email" id="" placeholder="Correo Electrónico" value="$user->email">
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>