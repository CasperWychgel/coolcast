@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Al je producten op één plek</h1>
            <p class="lead text-center">Hieronder zie je een overzicht van alle producten in je huis.</p>
        </div>
    </div>
    <div class="card-body">
        @foreach ($invproducts as $invproduct)
            <div class="card mb-2">
                <div class="card-body bg-card">
                    <h5 class="card-title">{{$invproduct->name}}  <a class="btn btn-primary" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a></h5>

                    <p class="card-text">{{$invproduct->expiration_date}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <div class="container">
            <h1 class="display-4 text-center">Houd je eigen bijdrage bij</h1>
            <p class="lead text-center">Hieronder zie je hoeveel CO2 uitstoot dit jaar is bespaard</p>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">0,856 Ton CO2</div>
            </div>
        </div>
    </div>
@endsection
