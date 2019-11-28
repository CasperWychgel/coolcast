@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Producten in de gevarenzone.</h1>
            <p class="lead text-center">Deze producten gaan binnenkort over de houdbaarheidsdatum, Je hebt nog een aantal dagen om deze producten te gebruiken.</p>
            <a href="{{route('home')}}" class="text-white btn btn-block btn-light bg-transparent shadow-lg">Go to your CoolCast</a>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover table-borderless mt-0">
            <thead>
            <tr>
                <th scope="col">Producten</th>
                <th scope="col">Houdbaarheidsdatum</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($invproducts as $invproduct)
                <tr>
                    <td>{{$invproduct->name}}</td>
                    <td>{{$invproduct->expiration_date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection


