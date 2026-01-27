<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <table>
    <form action="/authentication/checkRegister" method="POST">
        @csrf
        <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" name="username" placeholder="username"></td>
        </tr>
        <tr>
            <td><label for="pass">Password</label></td>
            <td><input type="text" name="pass" placeholder="password"></td>
        </tr>
        
        <tr>
            <td><label for="repass">Re-Password</label></td>
            <td><input type="text" name="repass" placeholder="re-password"></td>
        </tr>
        <tr>
            <td><label for="mssv">MSSV</label></td>
            <td><input type="text" name="mssv" placeholder="MSSV"></td>
        </tr>
        <tr>
            <td><label for="class">Class</label></td>
            <td><input type="text" name="class" placeholder="Input your class"></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="text" name="gender" placeholder="Input your gender"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">register</button></td>
        </tr>
    </form>
    </table>
</body>
</html>