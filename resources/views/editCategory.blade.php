<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>Editar {{ $category['name'] }}</title>
</head>
<body>
    @include ('header2')
    <main>
        <h1>Editar {{ $category['name'] }}</h1>
        <form class="form" action="/supervise/update-category/{{ categroryId }}" method="POST">
            @method('PUT')
            @csrf
            <label for="name">Nombre</label><br>
            <input id="name" name="name" type="text" value="{{ $category['name'] }}" placeholder="Nombre">
            <br>
            <label for="description">Descripción</label><br>
            <input id="description" name="description" type="text" value="{{ $category['description'] }}" placeholder="Descripción">
            <br>
            <div>
                <label for="state">Estado</label>
                <select id="state" name="state" value="{{ $category['state'] }}">
                    <option value="active">Activa</option>
                    <option value="inactive">Inactiva</option>
                </select>
            </div><br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </main>
</body>
</html>