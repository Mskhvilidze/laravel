 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/laravel/public/posts">Blog</a>
                        </li>
                    </ul>
                    <!--Beide CSS werden verwendet!-->
                    <form class="d-flex dad">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{'Loggout'}}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/laravel/public/profile/{{auth()->user()->id}}">
                              {{Auth::user()->name}}
                              </a>
                            </li>
                        @endguest
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/laravel/public/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/laravel/public/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel/public/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel/public/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel/public/posts">Blog</a>
          </li>
          <li class="nav-item dropdown">-->
            <!--als Select für a Tag class "dropdown-toggle"-->
            <!--<a class="nav-link" href="/laravel/public/posts/create" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-expanded="false">
              Add Post
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>-->