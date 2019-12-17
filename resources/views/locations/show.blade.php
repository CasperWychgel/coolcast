@extends ('layout')

@section('content')

        <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
            <div class="container">
                @foreach ($locations as $location)
                <h1 class="display-4 text-center">Alle producten op locatie '{{$location->name}}'</h1>
                <p class="lead"></p>
                @endforeach
            </div>
            <div class="container-fluid">
                <div class="custom-control custom-checkbox editshow">
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
                    <div class="container-fluid mb-2 bg-card">
                        <div class="row">
                            <div class="card-body">
                                <div class="col-6 ">
                                    <h5 class="card-title">{{$invproduct->name}}</h5>
                                    <p class="card-text">{{$invproduct->expiration_date}}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="editshow">
                                    <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                                    <label class="custom-control-label" for="{{$invproduct->id}}"></label>
                                    <a class="text-white btn btn-light bg-transparent" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a>
                                </div>
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
