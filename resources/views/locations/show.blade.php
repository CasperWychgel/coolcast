@extends ('layout')

@section('content')

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
                        <td><a class="btn btn-primary" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
@include('partials._empty-error')

@endsection