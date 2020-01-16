@extends ('layout')
@if ($copylocations->isempty())
    <script>window.location = "/home";</script>
@endif

@section('content')

    <div class="jumbotron jumbotron-fluid bg-transparent mb-0">
        <div class="container">
            @if(count($copylocations ) == 1)
                <h1 class="display-4 text-center">Pas op! dit product is bijna over de datum</h1>
                @else
                <h1 class="display-4 text-center">Pas op! deze {{count($copylocations)}} producten gaan bijna over de datum</h1>
            @endif
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
            @foreach ($copylocations as $copylocation)
                @if($copylocation->id == null)

                @else
                    <div class="card mb-2">
                    @if ($invproduct->expiration_date<$red)
                    <div class="red"></div>
                    @elseif (($invproduct->expiration_date<=$orange))
                    <div class="orange"></div>
                    @else 
                    <div class="green"></div>
                    @endif

                    
                        <div class="card-body bg-card">
                            <h5 class="card-title">{{$copylocation->name}}</h5>
                            <p class="card-text">{{$copylocation->expiration_date}}</p>
                        <div class="editshow">
                                <i class="fas fa-trash"></i>
                                <label for="danger" class="btn btn-danger">Verwijder<input type="checkbox" id="danger" name="product[]" value="{{$copylocation->product_id}}" class="badgebox selectbox"><span class="badge">&check;</span></label>
                                <a class="text-white btn btn-light bg-transparent" href="/products/{{$copylocation->product_id}}/edit" role="button">Edit</a>
            
                    
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
