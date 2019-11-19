@extends ('layout')

@section('content')

<div class="container scrolling z-depth-1 white">

    <form id="createform" method="POST" action="./add">
        {{csrf_field()}}

        <p>What is the location called?</p>
        <input placeholder="Location name" name="name" type="text" class="validate">


        <button class="" type="submit" name="action">Submit

        </button>
    </form>
</div>

@endsection