<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
   <h2>Lista de alumnos</h2>


    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Fechanacimiento</th>
										<th>Direccion</th>
										<th>Genero</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Clave</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $alumno->nombre }}</td>
											<td>{{ $alumno->apellido }}</td>
											<td>{{ $alumno->fechanacimiento }}</td>
											<td>{{ $alumno->direccion }}</td>
											<td>{{ $alumno->genero }}</td>
											<td>{{ $alumno->telefono }}</td>
											<td>{{ $alumno->correo }}</td>
											<td>{{ $alumno->clave }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</body>
</html>