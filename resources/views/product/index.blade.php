<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>proudct list</h1>
    <>
        <tr>
            <th>name</th>
            <th>price</th>
        </tr>
        <tr>
            <td>kho ga mixi</td>
            <td>100000</td>
        </tr>
        <tr>
            <td>kho bo</td>
            <td>80000</td>
        </tr>
        <tr>
            <td>Cho xao xa ot</td>
            <td>200000</td>
        </tr>
        <tr>
            <td>lau cho</td>
            <td>500000</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('add') }}">add product</a>
            </td>
        </tr>
    </table>
</body>
</html>