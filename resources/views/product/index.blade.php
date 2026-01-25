<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table>
        <tr>
            <th>name</th>
            <th>price</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach
            <td colspan="2">
                <a href="{{ route('add') }}">add product</a>
            </td>
        </tr>
    </table>
</body>
</html>