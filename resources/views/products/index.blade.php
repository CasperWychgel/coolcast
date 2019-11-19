@extends ('layout')

@section('content')


    <div class="">
        @foreach ($products as $product)
            <a class=""><span >{{$product->expiration_date}}</span>{{$product->name}}</a>
            <br>
        @endforeach
    </div>


@endsection