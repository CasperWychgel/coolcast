@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Your products</h1>
            <p class="lead text-center">All your current products are shown on this page, </p>
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
@endsection


