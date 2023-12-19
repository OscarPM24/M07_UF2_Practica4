<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Professorat</title>
    <style>
        a {
            text-decoration:none;
            color:black;
        }
        .editar {
            background-color:#a1a1df;
        }

        .detalls {
            background-color: #a1a1df;
        }

        .eliminar {
            background-color: red;
        }

        td {
            margin: 3em;
        }
    </style>
</head>
<body>
    <div>
        <h1>Edita un professor </h1>
    </div>
    <form action="{{ route('updateProfessorat', $professorat->id) }}" method="POST">
        @csrf
        
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" value="{{ $professorat->name }}">
        </div>
        <div>
            <label for="surname">Cognoms</label>
            <input type="text" name="surname" value="{{ $professorat->surname }}">
        </div>
        <div>
            <label for="email">Correu electrònic</label>
            <input type="text" name="email" value="{{ $professorat->email }}">
        </div>
        <button type="submit">Guardar</button>
    </form>

    <button><a href="{{route('professorat')}}"> Torna enrere </a></button>
</html>