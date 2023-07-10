<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-xtra-blog.css') }}" rel="stylesheet">
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
  @include('header', ['usuario' => $usuario,'estado' => '','estadoP' => '','estadoD' => 'active'])
    <div class="container-fluid">
        <main class="tm-main">
            <form>
                <div class="form-row">
                 
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="input" value="{{$usuario['username']}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" class="form-control" id="inputEmail4" value="{{$usuario['email']}}" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Direccion</label>
                  <input type="text" class="form-control" id="inputAddress" value="{{$usuario['address']['street']." ".$usuario['address']['suite']}}" placeholder="1234 Main St">
                </div>
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" value="{{$usuario['address']['city']}}" id="inputCity">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" value="{{$usuario['address']['zipcode']}}" id="inputZip">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Telefono</label>
                    <input type="text" class="form-control" id="input" value="{{$usuario['phone']}}">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Empresa</label>

                    <input type="text" class="form-control" id="input" value="{{$usuario['company']['name']}}">
                   
                  </div>
                
                </div>
               
           
              </form>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>