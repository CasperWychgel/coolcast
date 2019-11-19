@extends ('layout')

@section('content')



            <form id="" method="POST" action="/add" >
                {{csrf_field()}}

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Product</label>
                    </div>
                    <select name="name" class="custom-select" id="inputGroupSelect01">
                        @foreach ($products as $product)
                            <option value="{{$product->name}}">{{$product->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Location</label>
                    </div>
                    <select name="location" class="custom-select" id="inputGroupSelect01">
                        @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach

                    </select>
                </div>

                <input class="btn btn-primary" type="submit" value="Submit">

            </form>


@endsection