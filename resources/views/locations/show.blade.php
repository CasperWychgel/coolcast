@extends ('layout')

@section('content')


    @if ($invproducts->isEmpty())
        <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
            <div class="container">
                <h1 class="display-4 text-center">Dat is pech, producten weg!</h1>
                @foreach ($locations as $location)
                <p class="lead text-center">Er is hier helaas nog niks te vinden in de {{$location->name}}</p>
                @endforeach
                <div class="text-center">
                    <a href="{{route('add')}}" class="btn btn-light text-white bg-transparent shadow-lg">Voeg producten toe</a>
                </div>
            </div>
        </div>
    @else
        <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
            <div class="container">
                @foreach ($locations as $location)
                <h1 class="display-4 text-center">Alle producten in de {{$location->name}}</h1>
                <p class="lead"></p>
                @endforeach
            </div>
        </div>
        <div class="container">
            <table class="table table-hover table-borderless mt-0">
                <thead>
                <tr>
                    <th scope="col">Producten</th>
                    <th scope="col">Houdbaarheidsdatum</th>
                    <th scope="col">Bijwerken</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($invproducts as $invproduct)
                    <tr>
                        <td>{{$invproduct->name}}</td>
                        <td>{{$invproduct->expiration_date}}</td>
                        <td><a class="btn btn-primary" href="/products/{{$invproduct->id}}" role="button">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection