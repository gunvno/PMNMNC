<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="/authentication/checkRegister" , method="POST">
        @csrf
        <input type="text" name="username" placeholder="username">
        <input type="text" name="pass" placeholder="password">
        <input type="text" name="repass" placeholder="password">
        <input type="number" name="age" placeholder="Input your age">
        <button type="submit">register</button>
    </form>
</body>
</html>