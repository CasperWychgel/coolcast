@extends ('layout')

@section('content')


    <div class="">
        @foreach ($invproducts as $invproduct)
            <a class="">{{$invproduct->name}}</a>
            <br>
        @endforeach
    </div>

@endsection