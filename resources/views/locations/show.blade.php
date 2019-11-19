@extends ('layout')

@section('content')
    <div>
        @foreach ($products as $product)
            <a><span>{{$product->expiration_date}}</span>{{$product->name}}</a>
        @endforeach
    </div>
@endsection