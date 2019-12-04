@extends ('layout')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Al je producten op één plek</h1>
            <p class="lead text-center">Hieronder zie je een overzicht van alle producten in je huis.</p>
        </div>
        <div class="container-fluid editshow">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input selectall" name="selectall" id="selectall" >
                <label class="custom-control-label" for="selectall">Selecteer alle producten</label>
            </div>
        </div>
    </div>
    <form method="post" id="deleteform">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <div class="card-body">
            @foreach ($invproducts as $invproduct)
                <div class="card mb-2">
                    <div class="card-body bg-info">
                        <h5 class="card-title">{{$invproduct->name}}</h5>
                        <p class="card-text">{{$invproduct->expiration_date}}</p>
                        <div class="editshow">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                                <label class="custom-control-label" for="{{$invproduct->id}}">Selecteer dit als je het product wilt verwijderen</label>
                            </div>
                            <a class="text-white btn btn-light bg-transparent" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </form>

    <div class="jumbotron jumbotron-fluid bg-transparent mb-5">
        <div class="container mb-5">
            <h1 class="display-4 text-center">Houd je eigen bijdrage bij</h1>
            <p class="lead text-center">Hieronder zie je hoeveel CO2 uitstoot dit jaar is bespaard</p>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">0,856 Ton CO2</div>
            </div>
        </div>
    </div>
    <script>
        $('.selectall').click(function () {
            $('.selectbox').prop('checked',$(this).prop('checked'))
        })
    </script>
@endsection
