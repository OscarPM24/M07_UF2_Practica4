<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>professorat</title>
</head>
<body>
    <div>
        <table>
            <th>
                <td>ID</td><td>Name</td><td>Surname</td><td>Rol</td><td>Email</td>
            </th>
            @foreach ($professorat as $professor)
                <tr>
                    @foreach ($professor as $valor)
                    <td>{{ $valor }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('usuaris2') }}">Back</a>
    </div>
</body>
</html>