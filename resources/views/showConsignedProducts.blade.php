<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Consignados</title>
</head>
<body>
    @include ('header2')
    <h2>Productos Consignados</h2>
    @foreach ($consignedProducts as $product)
        <a href="/products/unconsign-products/{{ $product->Id }}">Desconsignar {{ $product->name }}</a>
    @endforeach
</body>
</html>