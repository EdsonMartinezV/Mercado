<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>{{ $category['name'] }}</title>
</head>
<body>
    @include ('header2')
    <main>
        <h1>{{ $category['name'] }}</h1>
        <div class="info-card">
            <p>Descripción: {{ $category['description'] }}</p>
            <p>Estado: {{ $category['state'] }}</p>
        </div>
    </main>
</body>
</html>