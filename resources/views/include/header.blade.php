<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Food</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
        <a class="nav-link" href="{{ route('restaurants.store') }}">Restaurant</a>
        <a class="nav-link" href="{{ route('menus.store') }}">Menu</a>
        
        
        @guest
        <a class="nav-link" href="{{ route('register') }}">Register</a>
        @endguest
        
        @auth
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        @endauth
        
      </div>
    </div>
  </div>
</nav>
