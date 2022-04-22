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
        @foreach ($usersToManager as $user)
            <div class="horizontal-card">
                <p>{{ $user['name'] }}</p>
                <a href="/manager/reset-user-password/{{ $user->Id }}">Reestablecer Contraseña</a>
            </div>
        @endforeach
    </main>
</body>
</html>