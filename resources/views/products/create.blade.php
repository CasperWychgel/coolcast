@extends ('layout')

@section('content')
<form id="" method="POST" action="/add" >
    {{csrf_field()}}

    <p>What is the product called?</p>

    <input name="name" list="brow" placeholder="Product">
        <datalist id="brow">
        @foreach ($products as $product)
            <option value="{{$product->name}}">{{$product->name}}</option>
        @endforeach
        </datalist>
    </input>

    <input name="location" list="brow" placeholder="Locatie">
        <datalist id="brow">
        @foreach ($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
        @endforeach
        </datalist>
    </input>
    <div class="">
        <button class="" type="submit" name="action">Submit</button>
    </div>
</form>
@endsection