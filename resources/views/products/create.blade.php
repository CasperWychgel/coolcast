@extends ('layout')

@section('content')
<div class="container">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="img/logo/Fridge.svg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <ul>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @else
                        This is where you can add products to your inventory. Fill in the form below to get started.
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container scrolling z-depth-1 white">
    <div class="row">
        <form id="createform" method="POST" action="/add" class="col s12">
            {{csrf_field()}}
            <div class="row">
                <div class="input-field col push-s1 s10">
                    <p>What is the product called?</p>
                    <input placeholder="Product name" name="name" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col push-s1 s10">
                    <input type="text" name="expiration_date" id="datepicker" class="datepicker">
                    <label for="date">Pick an expiration date</label>
                </div>
            </div>
            <div class="input-field col push-s1 s10">
                <select name="location">
                    @foreach ($locations as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                </select>
                <label>Select your location</label>
            </div>
            <div class="container center-align">
                <button class="btn-large waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
            <div class="container" style="padding-bottom: 100px">

            </div>
        </form>
    </div>
</div>
@endsection