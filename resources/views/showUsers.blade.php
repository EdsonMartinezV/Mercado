<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <main>
        @include ('header2')
        <h2>Usuarios</h2>
        @foreach ($users as $user)
            <div class="horizontal-card">
                <p>{{ $user['name'] }}</p>
                <a href="/supervise/edit-user/{{ $user->Id }}">Editar</a>
                <a href="/supervise/reset-user-password/{{ $user->Id }}">Reestablecer Contraseña</a>
            </div>
        @endforeach
        <a class="create-button" href="/supervise/create-user">Crear usuario</a>
    </main>
</body>
</html>