@extends ('layout')

@section('content')

{{--
    @php(dd($products))
--}}

    <div class="collection with-header"style="margin-top: 0px;">
        @foreach ($products as $product)
            <a class="collection-item"><span class="badge">{{$product->expiration_date}}</span>{{$product->name}}</a>
        @endforeach
    </div>

    @if(empty($product))
        <a class="collection-item" href="{{route('add')}}">Voeg een product toe aan deze locatie</a>
    @endif
@endsection