<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #073850">
  <div class="container">
      <img src="{{ asset('eaghost.png') }}" class="navbar-brand me-3" width="40">
      <a class="navbar-brand text-warning" href="/">Eaghost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav-item text-white fs-2 me-2">|</div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" href="/"><span  data-feather="home"></span> Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog') ? 'active' : ''  }}" href="/blog"><span  data-feather="cpu"></span> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kategoris') ? 'active' : ''  }}" href="/kategoris"><span  data-feather="list"></span> Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : ''  }}" href="/about"><span  data-feather="info"></span> About</a>
          </li>
          @endauth
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li>
            <a href="/login" class="nav-link {{ Request::is('login')? 'active' : '' }}"><span data-feather="log-in"></span> Login</a>
          </li>
              
          @endauth
        </ul>
      </div>
    </div>
  </nav>