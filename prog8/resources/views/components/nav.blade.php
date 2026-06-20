 <nav class="nav">
      <a class="nav-link active" aria-current="page" href="/">Home</a>
      <a class="nav-link" href="/Chi-Siamo">Chi siamo</a>
      <a class="nav-link" href="/Contatti">Contatti</a>
      <a class="nav-link" href="/prodotti">Prodotti</a>
      <a class="nav-link" href="/prodotto/create">Inserisci articolo</a>
      <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
          <li>
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
               <form action="{{route('logout')}}" method="POST" style="display: none;" id="form-logout"> @csrf </form>
          </li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Accedi/Registrati</a>
          <ul class="dropdown-menu">  
          <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          </ul>
          @endauth
      </li>
     </nav>