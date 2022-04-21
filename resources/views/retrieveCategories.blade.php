<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>Categorías</title>
</head>
<body>
    @include('header2')
    <main>
        <h1>Categorías</h1>
        @foreach ($categories as $category)
            <div class="horizontal-card">
                <a href="/supervise/retrieve-category/{$category->Id}">{{ $cube['cubeName'] }}</a>
                <a href="/supervise/edit-category/{$category->Id}">Editar</a>
                <form action="/supervise/delete-category/{$category-Id}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="delete-button" type="submit" value="Eliminar">
                </form><br>
            </div>
        @endforeach
        <a class="create-button" href="/supervise/create-category">Crear categoría</a>
    </main>
</body>
</html>
