@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            @foreach ($locationproducts as $locationproduct)
            <h1 class="display-4 text-center">{{$locationproduct->name}}</h1>
            @endforeach
        </div>
    </div>
    <div class="container">
        <form id="" method="POST" action="">
            {{csrf_field()}}
            <input type="hidden" value="{{$locationproduct->name}}" name="name">
            <input type="hidden" value="{{$locationproduct->expiration_date}}" name="expiration_date">
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

            <button type="submit" name="action" class="text-white btn btn-block btn-light bg-transparent shadow-lg">Werk je CoolCast bij</button>
        </form>
    </div>

@endsection