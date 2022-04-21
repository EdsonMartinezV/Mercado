<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
    <title>Categorías</title>
</head>
<body>
    @include ('header')

    <main>
        @foreach ($categories as $category)
            <div>
                <img src="{{ $category->image }}" alt="">
                <a href="/categories/{{ $category->name }}">{{ $category->nombre }}</a>
            </div>
        @endforeach
    </main>
</body>
</html>