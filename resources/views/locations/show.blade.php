@extends ('layout')

@section('content')
    <div class="collection with-header"style="margin-top: 0px;">
        @foreach ($products as $product)
            <a class="collection-item"><span class="badge">{{$product->expiration_date}}</span>{{$product->name}}</a>
        @endforeach
    </div>
@endsection