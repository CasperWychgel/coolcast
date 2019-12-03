@extends ('layout')
@if ($invproducts->isempty())
    <script>window.location = "/home";</script>
@endif

@section('content')

    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Pas op! deze producten gaan bijna over de datum</h1>
        </div>
    </div>

    <div class="card-body">
        @foreach ($invproducts as $invproduct)
            <div class="card mb-2" style="">
                <div class="card-body bg-card">
                    <h5 class="card-title">{{$invproduct->name}}  <a class="btn btn-primary" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a></h5>

                    <p class="card-text">{{$invproduct->expiration_date}}</p>
                </div>
            </div>
        @endforeach
    </div>



@endsection
