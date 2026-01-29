<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/update/{{ $product->id }}" method="POST">
        @csrf
        <h1>edit product</h1>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $product->name }}" placeholder="product name">
        <label for="price">Price</label>
        <input type="text" name="price" value="{{ $product->price }}" placeholder="product price">
        <label for="stock">Stock</label>
        <input type="text" name="stock" value="{{ $product->stock }}" placeholder="product stock">
        <button type="submit">update</button>

    </form>
</body>
</html>