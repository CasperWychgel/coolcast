@extends ('layout')

@section('content')

    @include('partials._error')
    <div class="jumbotron jumbotron-fluid text-black bg-transparent mb-0 bg">
        <div class="container">
            <h1 class="display-4 text-center">Nieuwe locaties toevoegen</h1>
            <p class="lead text-center">Hier is het mogelijk om een nieuwe locatie toe te voegen aan je CoolCast</p>
        </div>
    </div>

    <div class="container text-black">
        <form id="" method="POST" action="/locations/add" >
            {{csrf_field()}}

            <div class="input-group mb-3 shadow-lg">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect02">Locatie</label>
                </div>
                <input name="name" class="form-control">
            </div>
            <button type="submit" name="action" class="text-white btn btn-block btn-info bg-darkblue shadow-lg">Add to your locations</button>
        </form>
    </div>
@endsection