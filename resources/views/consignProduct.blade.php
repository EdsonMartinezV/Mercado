<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consignar Producto</title>
</head>
<body>
    @include ('header')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->price }}</p>
    <form action="/manager/accept-product{{ $product }}" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="manage" id="" placeholder="Porcentaje de manejo">
        <select name="isConsigned" id="">
            <option value="true">Aceptado</option>
            <option value="false">Rechazado</option>
        </select>
        <textarea name="consignReason" id="" cols="30" rows="10" placeholder="Razón de no consigna"></textarea>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>