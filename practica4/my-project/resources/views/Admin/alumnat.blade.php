<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Surname</th><th>Email</th>
            </tr>
            @foreach ($alumnat as $alumne)
                <tr>
                    <td>{{ $alumne->id }}</td>
                    <td>{{ $alumne->name }}</td>
                    <td>{{ $alumne->surname }}</td>
                    <td>{{ $alumne->email }}</td>
                    <td><a href="{{ route('editAlumnat', ['id' => $alumne->id]) }}">EDIT</a></td>
                    <td><a href="{{ route('deleteAlumnat', ['id' => $alumne->id]) }}">DELETE</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('createAlumnat') }}">ADD Alumne</a>  <a href="{{ route('usuaris2') }}">Back</a>
    </div>

</body>
</html>