@extends ('layout')

@section('content')
<form id="" method="POST" action="/products/add" >
    {{csrf_field()}}

    <p>What is the product called?</p>

    <input name="name" list="brow" placeholder="Product">
        <datalist id="brow">
        @foreach ($products as $product)
            <option value="{{$product->name}}">{{$product->name}}</option>
        @endforeach
        </datalist>
    </input>

    <select name="location" placeholder="Locatie">
        @foreach ($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
        @endforeach
    </select>
    <div class="">
        <button class="" type="submit" name="action">Submit</button>
    </div>
</form>
@endsection