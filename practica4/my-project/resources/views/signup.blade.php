<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuari</title>
</head>
<body>
    <div>
        <h1>{{ $title }}</h1>
    </div>
    <div>
        <form method="POST">
            @csrf
            
            <div>
                <label>Id</label><br>
                <input type="number" name="id" required>
            </div>
            <div>
                <label>Rol </label><br>
                <select name="rol">
                    <option value="alumnat">Alumnat</option>
                    <option value="professorat">Professorat</option>
                </select>
            </div>
            <div>
                <label>Nom</label><br>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Cognom</label><br>
                <input type="text" name="surname" required>
            </div>
            <div>
                <label>Contrasenya</label><br>
                <input type="text" name="password" required>
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email" required>
            </div>
            <div>
                <label>Active</label><br>
                <input type="checkbox" name="active">
            </div>
            <div>
                <button type="submit" name="enviar"><a href="{{ route('signin') }}"></a>Enviar</button>
            </div>
            <div>
                <a href="{{ route('signin') }}">Iniciar Sessió</a>
            </div>
        </form>
    </div>
    
</body>
</html>