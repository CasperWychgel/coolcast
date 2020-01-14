<nav class="navbar navbar-expand-lg navbar-light">
    @guest
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="/img/logo/Fridge.svg" width="30" height="30" class="d-inline-block align-top rounded-circle"
                 alt="">
            Coolcast
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @endguest
            </ul>
        </div>
</nav>
