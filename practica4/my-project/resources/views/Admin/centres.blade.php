<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
    <div>
        <table>
            <th>
            <td>ID</td><td>Name</td><td>Address</td><td>CP</td><td>City</td>
            </th>
            @foreach ($centres as $centre)
                <tr>
                    @foreach ($centre as $valor)
                    <td>{{ $valor }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="">ADD Centre</a>
        <a href="{{ route('usuaris2') }}">ADMIN VISTA</a>
    </div>
</body>
</html>