<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="containers">
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Nombre de Usuario</th>
				<th>Correo</th>
                <th>Publicaciones</th>
				
			</tr>
		</thead>
		<tbody>

        
   

        @if(!empty($data) && is_array($data))
    @foreach($data as $item)
   
    <tr>
       
       <td> {{ $item['name'] }}</td>
        <td>{{ $item['username'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td> <a href="{{ url('/usuarios', $item['id']) }}" class="">Ver Publicaciones</a> </td>

    
       
       
        <!-- Agrega aquí más celdas según tus datos -->
    </tr>

    @endforeach
@endif

		</tbody>
	</table>
</div>
    
</body>
</html>