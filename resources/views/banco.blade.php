<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ma tran ban co {{ $n }} x {{ $n }}</h1> 
    <table border="1" cellspacing="0" cellpadding="10">
        @for ($i = 1; $i <= $n; $i++)
            <tr>
                @for ($j = 1; $j <= $n; $j++)
                    @if (($i + $j)%2==0 )
                        <td style="background-color: black;"></td>
                    
                    @else 
                    <td></td> 
                    @endif     
                @endfor
            </tr>
        @endfor  
    </table>
</body>
</html>