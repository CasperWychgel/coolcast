@extends ('layout')

@section('content')

    <h1>Je moeder</h1>

<div class="container scrolling z-depth-1 white">
    <div class="row">
        <form id="createform" method="POST" action="./add" class="col s12">
            {{csrf_field()}}
            <div class="row">
                <div class="input-field col push-s1 s10">
                    <p>What is the location called?</p>
                    <input placeholder="Location name" name="name" type="text" class="validate">
                </div>
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