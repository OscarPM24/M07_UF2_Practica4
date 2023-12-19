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
            Formulari creació centre
        </h1>
        <form method="POST" action="{{ route('storeCentre') }}">
            @csrf

            <div>
                <label>Name</label><br>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Adress</label><br>
                <input type="text" name="address" required>
            </div>
            <div>
                <label>CP</label><br>
                <input type="text" name="cp" required>
            </div>
            <div>
                <label>City</label><br>
                <input type="text" name="city" required>
            </div>
            <div>
                <button type="submit" name="enviar">Enviar</button>
            </div>
        </form>
        <a href="{{ route('indexCentres') }}">BACK</a>
    </div>
</body>
</html>