@extends ('layout')

@section('content')


    <div>
        @foreach ($locations as $location)
            <a href="/locations/{{ $location->id }}">{{$location->name}}</a>
        @endforeach
    </div>


@endsection