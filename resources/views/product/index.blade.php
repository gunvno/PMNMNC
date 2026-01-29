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
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Detail</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['stock'] }}</td>
            <td><a href="/product/show/{{ $product['id'] }}">detail</a></td>
            <td><a href="/product/destroy/{{ $product['id'] }}">delete</a></td>
            <td><a href="/product/edit/{{ $product['id'] }}">edit</a></td>
        </tr>
        @endforeach
            <td colspan="2">
                <a href="{{ route('add') }}">add product</a>
            </td>
        </tr>
    </table>
</body>
</html>