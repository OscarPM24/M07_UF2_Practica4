<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalls Professorat</title>
    <style>
        
        a {
            text-decoration:none;
            color: black;
           
        }
    
        .editar {
            background-color:#a1a1df;
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
<h1>Detalls del professorat {{ $professorat->id }}</h1> <!-- mostrem la id del professor seleccionat -->
    <table>
        <tr>
            <th>Nom</th>
            <th>Cognom</th>
            <th>Email</th>
        </tr>
        <!-- Mostrem el formulari amb la resta de dades -->
                <tr>
                    <td>{{ $professorat->name }}</td>
                    <td>{{ $professorat->surname }}</td>
                    <td>{{ $professorat->email }}</td>
                    <td><button class="editar"><a href="{{ route('editProfessorat', $professorat->id) }}"> EDIT </a></button></td> <!-- enviem la id del professor al mètode edit() -->
                    <td><button class="eliminar"><a href="{{ route('deleteProfessorat', $professorat->id) }}"> DELETE </a></button></td> <!-- enviem la id al mètode destroy() -->
                </tr>

               
    
    </table>
    <button><a href="{{route('professorat')}}"> Torna enrere </a></button>
</body>
</html>