<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos no Consignados</title>
</head>

<body>
    @include ('header2')

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        @foreach ($unconsignedProducts as $product)
            <a href="/manager/consign-products/{{ $product->Id }}">{{ $product->name }}</a>
        @endforeach
    @endforeach
</body>

</html>