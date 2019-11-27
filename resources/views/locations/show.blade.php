@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Your products</h1>
            <p class="lead"></p>
        </div>
    </div>
    <table class="table table-hover table-borderless mt-0">
        <thead>
        <tr>
            <th scope="col">Products</th>
            <th scope="col">Expiration date</th>
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

    @if(empty($invproduct))
        <div class="container-fluid justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Whoeps</h5>
                    <p class="card-text">Er is hier helaas niks te vinden.</p>
                    <a href="{{route('add')}}" class="btn btn-primary">Voeg producten toe</a>
                </div>
            </div>
        </div>
    @endif

@endsection