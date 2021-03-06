@extends ('layout')
@if ($invproducts->isempty())
    <script>window.location = "/home";</script>
@endif

@section('content')

    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Pas op! deze {{count($invproducts)}} producten gaan bijna over de datum</h1>
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
                    @if ($invproduct->expiration_date<$red)
                    <div class="red"></div>
                @elseif (($invproduct->expiration_date<=$orange))
                    <div class="orange"></div>
                @else 
                    <div class="green"></div>
                @endif
                    <div class="card-body bg-card">
                        <h5 class="card-title">{{$invproduct->name}}</h5>
                        <p class="card-text">{{$invproduct->expiration_date}}</p>
                        <div class="editshow">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                                <label class="custom-control-label" for="{{$invproduct->id}}">Product verwijderen?</label>
                            </div>
                            <a class="text-white btn btn-light bg-transparent" href="/products/{{$invproduct->id}}/edit" role="button">Edit</a>
                        </div>
                    </div>
                        @if ($invproduct->expiration_date<$red)
                            <h1 class="warning">!</h1>
                        @endif
                </div>
            @endforeach
        </div>
    </form>
    <script>
        $('.selectall').click(function () {
            $('.selectbox').prop('checked',$(this).prop('checked'))
        })
    </script>


@endsection
