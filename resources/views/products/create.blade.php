@extends ('layout')

@section('content')



            <form id="" method="POST" action="/add" >
                {{csrf_field()}}

                <p>What is the product called?</p>
                <input placeholder="Product name" name="name" type="text" class="validate">

                <input type="text" name="expiration_date" id="datepicker" class="datepicker">
                <label for="datepicker">Pick an expiration date</label>


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