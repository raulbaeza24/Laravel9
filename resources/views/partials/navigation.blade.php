
<nav class="navbar navbar-expand-lg" style="background-color: #0E8388">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Publicaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
          </li>
          &nbsp;
          @guest
          <li class="nav-item">
            <a class="nav-link btn btn-danger" href="{{ route('register') }}">Registrate</a>
          </li>
          &nbsp;
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="{{ route('login') }}">Inicia Sesión</a>
          </li>
          @endguest

          @auth
              <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="btn btn-danger">Cerrar Sesión</button>
              </form>
          @endauth
         
        </ul>
      </div>
    </div>
  </nav>
