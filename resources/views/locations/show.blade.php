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
                <input type="checkbox" class="custom-control-input selectall" name="selectall" id="selectall">
                <label class="custom-control-label" for="selectall">Selecteer alle producten</label>
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
                    @if ($copylocation->expiration_date<$red)
                        <div class="red"></div>
                    @elseif (($copylocation->expiration_date<=$orange))
                        <div class="orange"></div>
                    @else 
                        <div class="green"></div>
                    @endif
                        <div class="card-body bg-card">
                            <div class="col d-flex justify-content-between">
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
                        @if ($copylocation->expiration_date<$red)
                            <h1 class="warning">!</h1>
                        @endif
                    </div>
                    @endif
                @endforeach
            </div>
        </form>

        <script>
        $('.selectall').click(function () {
            $('.selectbox').prop('checked', $(this).prop('checked'))
            checkChecker()
        });

        let deleteButton = document.getElementsByClassName("deleteButton"); // deletebutton
        let checkbox = document.getElementsByClassName('selectbox'); //checkboxes
        
        console.log(checkbox[1].id) // manier om het ID te krijgen  
   

        for (let i = 0; i < checkbox.length; i++) {
            checkbox[i].addEventListener('change', checkChecker);
        }


        function checkChecker() {
            var unchecked = 0;
            var checked = 0
            for (let i = 0; i < checkbox.length; i++) {
                if(checkbox[i].checked){
                   checked++
                } else {
                    unchecked++;
                    console.log(unchecked)
                }
            }
            if(checkbox.length = unchecked){
                deleteButton[0].style.display = "none";
            }
            if(checked > 0){
                deleteButton[0].style.display = "flex";
            }
        }

    </script>

@include('partials._empty-error')
    </div>

@endsection
