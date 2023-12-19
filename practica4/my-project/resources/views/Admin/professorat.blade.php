<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>professorat</title>
    <style>
        a {
            text-decoration:none;
            color: black;
           
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
    <h1>Llista de professors</h1>
    <table>
        <button>
            <a href="{{ route('createProfessorat') }}">CREATE</a> <!-- enviem a la vista on tenim el formulari de creació -->
        </button>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Cognom</th>
            <th>Email</th>
        </tr>
        <!-- Mostrem els professors de la BBDD amb cada una de les seves propietats en una columna -->
            @foreach ($professorat as $professor) 
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->name }}</td>
                    <td>{{ $professor->surname }}</td>
                    <td>{{ $professor->email }}</td>
                    <td><button class="editar"><a href="{{ route('editProfessorat', $professor->id) }}"> EDIT </a></button></td> <!-- enviem la id del professor al mètode edit() -->
                    <td><button class="detalls"><a href="{{ route('showProfessorat', $professor->id) }}"> SHOW </a></button></td>
                    <td><button class="eliminar"><a href="{{ route('deleteProfessorat', $professor->id) }}"> DELETE </a></button></td> <!-- enviem la id al mètode destroy() -->
                </tr>
            @endforeach
        </tbody>
    </table>
   <button><a href="{{ route('usuaris') }}"> Torna enrere </a></button>
</body>
</html>
