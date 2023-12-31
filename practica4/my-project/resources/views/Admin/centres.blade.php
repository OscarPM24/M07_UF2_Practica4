<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Llistat dels centres</h1>
    <div>
        <form  method="GET" action="{{ route('showCentre') }}">
            <label for="cercar"><img src="https://logowik.com/content/uploads/images/search7780.jpg" alt=""></label>
            <input type="text" name="result">
            <button type="submit">Cercar</button>
        </form>
        <table>
            <tr>
            <th>ID</th><th>Name</th><th>Address</th><th>CP</th><th>City</th>
            </tr>
            @foreach ($centres as $centre)
                <tr>
                    <td>{{$centre->id}}</td>
                    <td>{{$centre->name}}</td>
                    <td>{{$centre->address}}</td>
                    <td>{{$centre->cp}}</td>
                    <td>{{$centre->city}}</td>
                    <td>
                    <a id="delete" href="{{ route('destroyCentre', ['id' => $centre->id]) }}">DELETE</a>
                    </td>
                    <td>
                    <a id="edit" href="{{ route('editCentre', ['centre' => $centre]) }}">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('createCentre') }}">ADD Centre</a>
        <a href="{{ route('usuaris2') }}">ADMIN VISTA</a>
    </div>
</body>
</html>