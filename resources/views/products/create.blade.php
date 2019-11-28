@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Nieuwe producten toevoegen</h1>
            <p class="lead text-center">Hier is het mogelijk om een of meerdere producten toe te voegen aan je CoolCast</p>
        </div>
    </div>
    <div class="container">
        <form id="" method="POST" action="/products/add" >
            {{csrf_field()}}
            <div class="input-group mb-3 shadow-lg">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Product</label>
                </div>
                <select name="name" class="custom-select bg-transparent" id="inputGroupSelect01">
                    @foreach ($products as $product)
                        <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3 shadow-lg">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect02">Location</label>
                </div>
                <select name="location" class="custom-select bg-transparent" id="inputGroupSelect02">
                    @foreach ($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="action" class="text-white btn btn-block btn-light bg-transparent shadow-lg">Add to your CoolCast</button>
        </form>
    </div>

@endsection