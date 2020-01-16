<nav class="navbar navbar-expand-lg navbar-light">
    @guest
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="/img/logo/Fridge.svg" width="30" height="30" class="d-inline-block align-top rounded-circle"
                 alt="">
            Coolcast
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    @else
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="/img/logo/Fridge.svg" width="30" height="30" class="d-inline-block align-top rounded-circle"
                 alt="">
            Coolcast
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
                    <a class="nav-link" href="/locations/add">Add location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('notify')}}">Notificaties</a>
                </li>

                @foreach($locations as $location)
                    <li class="nav-item">
                        <a class="nav-link" href="/locations/{{ $location->id }}/show">{{ $location->name }}</a>
                    </li>
                @endforeach
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                </li>
            @endguest
            </ul>
        @endguest
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
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
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>

</nav>
