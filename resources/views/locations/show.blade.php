@extends ('layout')

@section('content')
    <div>
        @foreach ($invproducts as $invproduct)
            <a><span>{{$invproduct->expiration_date}}</span>{{$invproduct->name}}</a>
            <br>
        @endforeach
    </div>
@endsection