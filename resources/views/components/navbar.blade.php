<nav class="navbar">
    <div class="container navbar-body navStyle">
      <li class="nav-item">
      <a class="nav-link home-text" href="/">HOMEPAGE</a>
    </li>
       <li class="nav-item">
        <a class="nav-link navbar-text @if (Route::currentRouteName() == 'contacts') @endif" aria-current="page" href="{{ route('contacts') }}">CONTATTACI</a>
      </li>
          {{-- <li class="nav-item">
            <a class="nav-link navbar-text" href="{{ route('products.products_index')}}">ELENCO PRODOTTI</a>
          </li>                         NON LI HO ANCORA CREATI, NON DIRLO A NESSUNO --}}
          <li class="nav-item">
          <a class="nav-link navbar-text" href="{{route('land.land_index')}}">CATALOGO DEI TERRENI</a>
        </li>
          <li class="nav-item">
            <a class="nav-link navbar-text" href="{{route('house.index')}}">CATALOGO DEGLI IMMOBILI</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navbar-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ENTRA
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item navbar-text" href="{{route('login')}}">ACCEDI</a>
              </li>
              <li><a class="dropdown-item navbar-text" href="{{route('register')}}">REGISTRATI</a>
              </li>
            </ul>
            @else
          </li>
        </ul>
        @auth
        <li class="nav-item">
          <a class="nav-link navbar-text" href="{{route('land.land_create')}}">INSERISCI IL TUO TERRENO</a>
        </li>
        <li class="nav-item">
          <a href="{{route('house.create')}}" class="nav-link navbar-text">INSERISCI LA TUA CASA</a>
        </li>
        <li class="nav-item">
          <a>
            <li class="nav-item">
              <a class="dropdown-item  navbar-text">CIAO {{Auth::user()->name}}</a>
            </li>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-warning">Logout</button>
            </form>
            @endguest
          </a>
        </li>
        @endauth
      </div>
    </div>
  </nav>