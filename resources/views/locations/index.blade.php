@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Nieuwe producten toevoegen</h1>
            <p class="lead text-center">Hier is het mogelijk om één of meerdere producten toe te voegen aan je CoolCast</p>
        </div>
    </div>
    <ul class="list-group m-3">
        @foreach ($locations as $location)
            <li class="list-group-item mb-3 bg-info rounded">
                <a class="text-white" href="/locations/{{ $location->id }}/show"><h2>{{$location->name}}</h2></a>
            </li>
        @endforeach
    </ul>

@endsection