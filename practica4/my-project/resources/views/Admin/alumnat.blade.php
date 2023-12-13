<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <div>
        <table>
            <th>
                <td>ID</td><td>Name</td><td>Surname</td><td>Rol</td><td>Email</td>
            </th>
            @foreach ($alumnat as $alumne)
                <tr>
                    @foreach ($alumne as $valor)
                    <td>{{ $valor }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('createAlumnat') }}">ADD Alumne</a>  <a href="{{ route('usuaris2') }}">Back</a>
    </div>

</body>
</html>