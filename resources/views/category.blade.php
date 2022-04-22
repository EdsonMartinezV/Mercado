<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }}</title>
</head>
<body>
    @include ('header')

    <main>
        @foreach ($category->products as $product)
            <div>
                <img src="{{ $product->image }}" alt="">
                <a href="/products/{{ $product->Id }}">{{ $product->name }}</a>
            </div>
        @endforeach
    </main>
</body>
</html>