<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: green;">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}

        {{-- CUCSH --}}
        <a class="navbar-brand" href="#">
             <img class="img-fluid" src="{{asset('custom/navbar/logo-cucsh.png')}}" alt="logoUDG" style="min-height: 50px; padding-top: 0px; height: 60px;">
        </a>

        <a class="navbar-brand" href="#">
             <img class="img-fluid" src="{{asset('custom/navbar/navbar-logo-example.png')}}" alt="logoUDG" style="min-height: 50px; padding-top: 0px; height: 60px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto align-items-sm-center">

                {{-- logo con titulo --}}
                {{-- <li class="nav-item">
                      <!-- Image and text -->
                    <a class="navbar-brand" href="#">
                      <img src="{{asset('custom/navbar/navbar-logo-example.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                      Bootstrap
                    </a>
                  </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="#">item1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item4</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Item dropDown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                      <li><a class="dropdown-item " href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->

                <li class="nav-item mx-2">
                    <form action="#" class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                  </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>


    </div>


</nav>
