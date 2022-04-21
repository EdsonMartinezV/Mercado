<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>Crear categoría</title>
</head>
<body>
    @include('header2')
    <main>
        <h1>Crear Categoría</h1>
        <form class="form" action="/supervise/save-category" method="POST">
            @csrf
            <input id="name" name="name" type="text" placeholder="Nombre">
            <br>
            <input id="description" name="description" type="text" placeholder="Descripción">
            <br>
            <div>
                <label for="state">Estado</label>
                <select id="state" name="state">
                    <option value="active" selected>Activa</option>
                    <option value="inactive">Inactiva</option>
                </select><br>
            </div>
            <button type="submit">Guardar Categoría</button>
        </form>
    </main>
</body>
</html>