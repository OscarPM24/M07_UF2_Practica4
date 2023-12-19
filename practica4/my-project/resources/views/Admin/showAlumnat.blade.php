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
                <td>{{ $alumne->id }}</td>
                <td>{{ $alumne->name }}</td>
                <td>{{ $alumne->surname }}</td>
                <td>{{ $alumne->email }}</td>
            </tr>
        </table>
    </div>
    <div>
        <a href="{{ route('alumnat') }}">Back</a>
    </div>

</body>
</html>