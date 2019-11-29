@extends ('layout')

@section('content')
<form id="" method="POST" action="/products/add" >
    {{csrf_field()}}

    <p>What is the product called?</p>

    <select class="myselect" name="name" placeholder="Name">
        @foreach ($products as $product)
            <option value="{{$product->name}}">{{$product->name}}</option>
        @endforeach
    </select>

    <select class="myselect" name="location" placeholder="Locatie">
        @foreach ($locations as $location)
            <option value="{{$location->id}}">{{$location->name}}</option>
        @endforeach
    </select>

    <div>
        <button class="" type="submit" name="action">Submit</button>
    </div>
</form>

<script type="text/javascript">
    $(".myselect").select2();
</script>

<script type="text/javascript">
    $(".myselect2").select2();
</script>

@endsection