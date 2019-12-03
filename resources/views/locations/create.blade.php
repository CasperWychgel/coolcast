@extends ('layout')

@section('content')

    @include('partials._error')

    <form id="" method="POST" action="/locations/add" >
        {{csrf_field()}}

        <p>What is the location called?</p>

        <input name="name" list="brow" placeholder="Location">

        <div class="">
            <button class="" type="submit" name="action">Submit</button>
        </div>
    </form>
@endsection