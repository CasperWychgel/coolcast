@extends ('layout')

@section('content')



            <form id="" method="POST" action="/add" >
                {{csrf_field()}}

                <p>What is the product called?</p>
                <select name="name">
                    @foreach ($products as $product)
                        <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>

                <select name="location">
                    @foreach ($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                </select>

                <div class="">
                    <button class="" type="submit" name="action">Submit</button>
                </div>
            </form>


@endsection