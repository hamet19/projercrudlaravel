<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Acueil</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="/products/create">Add product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('products.index') }}">list product</a>
        </li>
      </ul>
      
      
    </div>
    @auth
        
  
    <form action="{{route('logout')}}" class="d-inline-blog float-right" method="POST">
        @csrf
    <button class="btn btn-primary" >{{auth()->user()->name }} | Logout</button>
    </form>
    @else 
    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
  
    @endauth
  </nav>
