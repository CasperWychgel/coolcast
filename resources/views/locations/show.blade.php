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

                @foreach ($copylocations as $copylocation)
                    @if($copylocation->id == null)

                        @else
                    <div class="card mb-2">
                        <div class="card-body bg-card">
                            <h5 class="card-title">{{$copylocation->name}}</h5>
                            <p class="card-text">{{$copylocation->expiration_date}}</p>
                            <div class="editshow">
                                <i class="fas fa-trash"></i>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input selectbox" name="product[]" value="{{$copylocation->copy_id}}" id="{{$copylocation->copy_id}}">
                                    <label class="custom-control-label" for="{{$copylocation->copy_id}}"></label>
                                </div>
                                {{--{{dd($copylocation)}}--}}
                                <a class="text-white btn btn-light bg-transparent" href="/products/{{$copylocation->copy_id}}/edit" role="button">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endif
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
