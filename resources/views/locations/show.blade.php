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

    <div class="center bottom-navbar">
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">check</i></a>
        <a href="/add" class="btn-floating btn-large waves-effect waves-light mainaddbtn coolcastdarkblue"><i class="material-icons">add</i></a>
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">close</i></a>
    </div>

@endsection