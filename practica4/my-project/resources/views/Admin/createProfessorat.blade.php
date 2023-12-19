<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Professorat</title>
    <style>
        a {
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <div>
        <h1>Crea un professor </h1>
    </div>
    <div>
        <form method="POST" action="{{ route('storeProfessorat') }}">
            @csrf

            <div>
                <label>Nom</label><br>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Cognom</label><br>
                <input type="text" name="surname" required>
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email" required>
            </div>
            <div>
                <button type="submit" name="enviar"><a href="{{ route('storeProfessorat') }}"></a>Enviar</button>
            </div>
            
        </form>
    </div>
    <button><a href="{{ route('professorat') }}"> Torna enrere </a> </button><!-- Afegit botó de tornar en rere per si no volem crear res -->
    
</body>
</html>