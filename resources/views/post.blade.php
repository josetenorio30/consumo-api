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
 <!-- Se incluye la vista del header -->
    @include('header', ['usuario' => $usuario,'estado' => 'active','estadoP' => '','estadoD' => ''])

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
                     
            
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title">{{ $data['title'] }}</h2>
                            
                            <p>
                                {{ $data['body'] }}
                            </p>
                            <span class="d-block text-right tm-color-primary">Creative . {{$usuario['name']}}</span>
                        </div>
                        
                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Comentarios</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            @if(!empty($Comenst) && is_array($data))
                            @foreach($Comenst as $item)
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                   
                                    <figcaption class="tm-color-primary text-center">Nommbre:<br>{{$item['name']}}</figcaption>
                                </figure>
                                <div>
                                    <p>
                                        {{$item['body']}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                      
                                        <span class="tm-color-primary">{{$item['email']}}</span>
                                    </div>                                                 
                                </div>                                
                            </div>
                            @endforeach
                            @endif                   
                        </div>
                    </div>
                </div>
                
            </div>
            <footer class="row tm-row">
                
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2023  Company Co. Ltd.
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>