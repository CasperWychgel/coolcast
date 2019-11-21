@extends ('layout')

@section('content')
    <form id="" method="POST" action="/locations/add" >
        {{csrf_field()}}

        <p>What is the location called?</p>

        <input name="name" list="brow" placeholder="Product">

        <div class="">
            <button class="" type="submit" name="action">Submit</button>
        </div>
    </form>
@endsection