<nav class="navbar navbar-expand-lg navbar-light bg-blue">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="../img/logo/Fridge.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Coolcast
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('notify')}}">Producten in de gevarenzone</a>
            </li>
            @foreach($locations as $location)
                <li class="nav-item">
                    <a class="nav-link text-white" href="/locations/{{ $location->id }}/show">{{ $location->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
