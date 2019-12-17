<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="/img/logo/Fridge.svg" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
        Coolcast
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a class="btn btn-warning" href="{{route('notify')}}">Notificaties</a>
                    <a href="{{route('locations')}}" class="btn btn-info">Locatie overzicht</a>
                </div>
            </li>
            <li class="nav-item">
            @foreach($locations as $location)
                <li class="nav-item">
                    <a class="nav-link" href="/locations/{{ $location->id }}/show">{{ $location->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
