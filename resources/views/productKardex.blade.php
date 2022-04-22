<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    @include ('header2')

    <h2>{{ $product->name }}</h2>
    <p>{{ $product->publishedAt }}</p>
    <p>Preguntas</p>
    <ul>
        @foreach ($product->questions() as $question)
            <li>{{ $question }}</li>
        @endforeach
    </ul>
    <p>Unidades vendidas{{ $product->compra().count() }}</p>
</body>
</html>