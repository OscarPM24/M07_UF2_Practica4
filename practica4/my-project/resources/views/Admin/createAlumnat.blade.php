<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creació de Alumne</title>
</head>
<body>
    <h1>Creació de Alumne</h1>
    <div>
    <form method="POST" action="{{ route('alumnatCreate') }}">
            @csrf

            <div>
                <label>Name</label><br>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Surname</label><br>
                <input type="text" name="surname" required>
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email"  required>
            </div>
            <div>
                <button type="submit" name="enviar">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>