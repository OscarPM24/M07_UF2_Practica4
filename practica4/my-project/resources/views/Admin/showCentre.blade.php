<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
            <th>ID</th><th>Name</th><th>Address</th><th>CP</th><th>City</th>
            </tr>
                <tr>
                    <td>{{$centre->id}}</td>
                    <td>{{$centre->name}}</td>
                    <td>{{$centre->address}}</td>
                    <td>{{$centre->cp}}</td>
                    <td>{{$centre->city}}</td>
                    <td>
                    <a href="{{ route('destroyCentre', ['id' => $centre->id]) }}">DELETE</a>
                    </td>
                    <td>
                    <a href="{{ route('editCentre', ['centre' => $centre]) }}">EDIT</a>
                    </td>
                </tr>
        </table>
    </div>
    <div>
        <a href="{{ route('indexCentres') }}">BACK</a>
        <a href="{{ route('usuaris2') }}">ADMIN VISTA</a>
    </div>
</body>
</html>