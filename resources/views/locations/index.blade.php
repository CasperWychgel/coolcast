@extends ('layout')

@section('content')


    <div class="collection with-header"style="margin-top: 0px;">
        @foreach ($locations as $location)
            <a href="/locations/{{ $location->id }}" class="collection-item">{{$location->name}}</a>
        @endforeach
    </div>

    <div class="center bottom-navbar">
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">check</i></a>
        <a href="locations/add" class="btn-floating btn-large waves-effect waves-light mainaddbtn coolcastdarkblue"><i class="material-icons">add</i></a>
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">close</i></a>
    </div>

@endsection