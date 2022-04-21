<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedores</title>
</head>
<body>
    @include ('header2')

    <h2>Vendedores</h2>
    @foreach ($sellers as $seller)
        <div class="horizontal-card">
            <a href="/supervise/show-seller/{{ $seller->Id }}">{{ $seller->name }}</a>
        </div>
    @endforeach
</body>
</html>