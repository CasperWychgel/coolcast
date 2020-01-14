@extends ('layout')
@if ($locationproduct->products->isempty())
    <script>window.location = "/home";</script>
@endif

@section('content')

    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Pas op! deze {{count($locationproducts)}} producten gaan bijna over de datum</h1>
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
            @foreach ($locationproducts as $locationproduct)
                @foreach ($locationproduct->products as $product)
                <div class="card mb-2">
                    <div class="card-body bg-card">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->expiration_date}}</p>
                        <div class="editshow">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$product->id}}" id="{{$product->id}}">
                                <label class="custom-control-label" for="{{$product->id}}">Product verwijderen?</label>
                            </div>
                            <a class="text-white btn btn-light bg-transparent" href="/products/{{$product->id}}/edit" role="button">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </form>
    <script>
        $('.selectall').click(function () {
            $('.selectbox').prop('checked',$(this).prop('checked'))
        })
    </script>


@endsection
