<!-- start nav menu -->
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-hamza shadow-sm">
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

                </ul>

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
                        <li class="nav-item mr-4">
                            <form action="{{route('search')}}" method="GET" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search car by Marque" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-danger font-weight-bold" href="/api/cars"><i class="fa fa-dragon mr-2"></i>{{ __('Rest Api') }}</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link text-primary font-weight-bold" href="{{route('admin')}}"><i class="fa fa-user-injured mr-2"></i>{{ __('Dashboard') }}</a>
                        </li>
                        <li class="nav-item"><img src="{{Auth::user()->getGravatar()}}"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
<!-- end nav menu -->
