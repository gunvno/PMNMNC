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
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="product name">
        <label for="price">Price</label>
        <input type="text" name="price" placeholder="product price">
        <label for="stock">Stock</label>
        <input type="text" name="stock" placeholder="product stock">
        <button type="submit">add</button>

    </form>
</body>
</html>