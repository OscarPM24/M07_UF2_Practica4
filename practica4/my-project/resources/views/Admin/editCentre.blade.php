<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
        <h1>
            Formulari edició centre
        </h1>
        <form method="POST" action="{{ route('updateCentre', ['id' => $centre->id]) }}">
            @csrf

            <div>
                <label>Name</label><br>
                <input type="text" name="name" value="{{$centre->name}}" required>
            </div>
            <div>
                <label>Adress</label><br>
                <input type="text" name="address" value="{{$centre->address}}" required>
            </div>
            <div>
                <label>CP</label><br>
                <input type="text" name="cp" value="{{$centre->cp}}" required>
            </div>
            <div>
                <label>City</label><br>
                <input type="text" name="city" value="{{$centre->city}}" required>
            </div>
            <div>
                <button type="submit" name="modify">Modify</button><br>
                <a href="{{ route('indexCentres') }}">BACK</a>
            </div>
        </form>
    </div>
</body>
</html>