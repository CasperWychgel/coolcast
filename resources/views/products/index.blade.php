@extends ('layout')

@section('content')


    <div class="">
        @foreach ($invproducts as $invproduct)
            <a class="">{{$invproduct->name}}</a> <a href="">{{$invproduct->date}}</a>
            <br>

        @endforeach
    </div>

@endsection