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
        <div class="card-body">
            @foreach ($invproducts as $invproduct)
                <div class="card mb-2">
                    <div class="card-body bg-card">
                        <h5 class="card-title">{{$invproduct->name}}</h5>
                        <div class="editshow">
                            <a class="btn btn-primary" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a>
                        </div>

                        <p class="card-text">{{$invproduct->expiration_date}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        
@include('partials._empty-error')

@endsection