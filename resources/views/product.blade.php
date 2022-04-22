<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    @include ('header')

    <img src="{{ $product->image }}" alt="">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->price }}</p>
    <form action="/products/{{ $product->id }}/questions" method="POST">
        @csrf
        <input type="text" name="question" id="" placeholder="Preguntale algo al vendedor">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>