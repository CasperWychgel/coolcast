@extends ('layout')

@section('content')
    <div class="">
        <ul class="list-group m-3">
            @foreach ($locations as $location)
                <li class="list-group-item mb-3 bg-info rounded">
                    <a href="/locations/{{ $location->id }}">{{$location->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection