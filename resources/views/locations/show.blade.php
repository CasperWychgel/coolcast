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
    </div>

    <form method="post" id="deleteform" class="mb-10">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        @foreach ($invproducts as $invproduct)
            <div class="card bg-card mb-2">
                @if ($invproduct->expiration_date<$red)
                <div class="red"></div>
            @elseif (($invproduct->expiration_date<=$orange))
                <div class="orange"></div>
            @else 
                <div class="green"></div>
            @endif
                <div class="card-body">
                    <div class="col d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">{{$invproduct->name}}</h5>
                            <p class="card-text">{{$invproduct->expiration_date}}</p>
                        </div>

                        <div class="mt-3 pl-5">
                            <input type="checkbox" class="custom-control-input selectbox mt-1" name="product[]"
                                   value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                            <label class="custom-control-label mt-1" for="{{$invproduct->id}}"></label>
                        <a class="text-white bg-transparent mt-1" href="/products/{{$invproduct->id}}/edit"><img src="/img/edit.png" alt="" width="20" height="20" class="align-self-center center ml-4"></a>
                        </div>
                    </div>
                </div>
                
                @if ($invproduct->expiration_date<$red)
                            <h1 class="warning">!</h1>
                        @endif
            </div>
        @endforeach
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

@endsection
