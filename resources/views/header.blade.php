<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
                    
            <h1 class="text-center">{{ $usuario['name'] }}</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">            
            <ul>
                <li class="tm-nav-item {{$estadoP}}"><a href="{{ url('/usuarios', $usuario['id']) }}" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Publicaciones
                </a></li>
                <li class="tm-nav-item {{$estado}}"><a href="#" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Publicacion
                </a></li>
                <li class="tm-nav-item {{$estadoD}}"><a href="{{ route('datos',$usuario['id']) }}" class="tm-nav-link">
                    <i class="fas fa-users"></i>
                  Informacion Personal
                </a></li>
               
            </ul>
        </nav>
        
       
    </div>
</header>