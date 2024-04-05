<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        @foreach($products)
        <tr>
            <td>{{ $products->id }}</td>
            <td>{{ $products->name }}</td>
            <td>{{ $products->price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>