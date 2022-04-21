<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seller->name }}</title>
</head>
<body>
    @include ('header2')

    <h2>{{ $seller->name }}</h2>
    <p>Aqui desde {{ $seller->createdAt }}</p>
    <p>Transacciones</p>
    <ul>
        @foreach ($seller->transactions as $transaction)
            <li>{{
                $transaction->totalMount
                $transaction->paymentMethod
                $transaction->paymentEvidence }}</li>
        @endforeach
    </ul>
    <p>Productos</p>
    <ul>
        @foreach ($seller->products as $product)
            <li>
                <a href="/supervise/product-kardex/{{ $product->Id }}">{{ $product->name }}</a>{{
                $product->price
                $product->description
                $product->isAcepted
                $product->isActive }}</li>
        @endforeach
    </ul>
</body>
</html>