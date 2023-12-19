<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificació de Alumne</title>
</head>
<body>
    <h1>Modificació de Alumne</h1>
    <div>
        <form method="POST" action="{{ route('updateAlumnat', ['id' => $alumne->id]) }}">
            @csrf
            <div>
                <label>Name</label><br>
                <input type="text" name="name" value="{{ $alumne->name }}" required>
            </div>
            <div>
                <label>Surname</label><br>
                <input type="text" name="surname" value="{{ $alumne->surname }}" required>
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email" value="{{ $alumne->email }}" required>
            </div>
            <div>
                <button type="submit" name="enviar">Enviar</button>
            </div>
        </form>
        <a href="{{ route('alumnat') }}">Back</a>
    </div>
</body>
</html>