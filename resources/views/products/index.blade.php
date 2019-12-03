@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Al je producten op één plek</h1>
            <p class="lead text-center">Hieronder zie je een overzicht van alle producten in je huis.</p>
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
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <div class="container">
            <h1 class="display-4 text-center">Houd je eigen bijdrage bij</h1>
            <p class="lead text-center">Hieronder zie je hoeveel CO2 uitstoot dit jaar is bespaard</p>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">0,856 Ton CO2</div>
            </div>
        </div>
    </div>

        <div class="card-header">
            Your products
        </div>
            <div class="card-body">
                @foreach ($invproducts as $invproduct)
                <div class="card mb-2" style="">
                    <div class="card-body bg-card">
                    <h5 class="card-title">{{$invproduct->name}}</h5>
                      <p class="card-text">27/11/2019</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center pt-5">
                    <button type="button" class="btn-primary btn-circle btn-xl mr-2 bg-blue"><img src="../img/delete.png" alt="" width="20" height="20">
                    </button>
                    <button type="button" class="btn-success btn-circle-l bg-darkblue"><img src="../img/add.png" alt="" width="20" height="20">
                    </button>
                    <button type="button" class="btn-success btn-circle btn-xl ml-2 bg-blue"><img src="../img/edit.png" alt="" width="20" height="20">
                    </button>
        </div>
@endsection
