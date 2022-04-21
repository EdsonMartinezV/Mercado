<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Supervisor</title>
</head>
<body>
    @include ('header')

    <p>Usuarios registrados: {{ 'hola' }}</p>
    <a href="/supervise/transactions">Transacciones</a>
    <a href="/supervise/proposals">Propuestas</a>
    <a href="/supervise/retrieve-categories">Ver categorías</a>
    <a href="/supervise/create-user">Crear Usuario</a>
    <a href="/supervise/show-users">Ver Usuarios</a>
    <a href="/supervise/show-sellers">Ver Vendedores</a>
</body>
</html>