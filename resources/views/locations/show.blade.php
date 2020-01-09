@extends ('layout')

@section('content')

        <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
            <div class="container">
                @foreach ($locations as $location)
                <h1 class="display-4 text-center">Alle producten op locatie '{{$location->name}}'</h1>
                <p class="lead"></p>
                @endforeach
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
                        <div class="card-body bg-card">
                            <h5 class="card-title">{{$invproduct->id->name}}</h5>
                            <p class="card-text">{{$invproduct->expiration_date}}</p>
                            <div class="editshow">
                                <i class="fas fa-trash"></i>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                                    <label class="custom-control-label" for="{{$invproduct->id}}"></label>
                                </div>
                                <a class="text-white btn btn-light bg-transparent" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
        <script>
            $('.selectall').click(function () {
                $('.selectbox').prop('checked',$(this).prop('checked'))
            })
        </script>

@include('partials._empty-error')

@endsection
