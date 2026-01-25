<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/store" method="POST">
        @csrf
        <h1>add product</h1>
        <input type="text" name="name" placeholder="product name">
        <input type="text" name="price" placeholder="product price">
        <button type="submit">add</button>

    </form>
</body>
</html>