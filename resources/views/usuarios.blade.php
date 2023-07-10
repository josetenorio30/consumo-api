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
    @include('header', ['usuario' => $usuario,'estado' => '','estadoP' => 'active','estadoD' => ''])

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
              
            <div class="row tm-row">
            @if(!empty($data) && is_array($data))
            @foreach($data as $item)
           
           
        
        
           
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ route('post',$item['id']) }}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="https://www.blogdelfotografo.com/wp-content/uploads/2022/01/girasol-foto-perfil.webp"  width="60px" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $item['title']}}</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        {{ $item['body']}}</p>
                   
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>{{$cantidad }} comentarios</span>
                        <span>{{ $usuario['name'] }}</span>
                    </div>
                </article>
              
          
            
            @endforeach
        @endif
    </div>

                       
            
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>