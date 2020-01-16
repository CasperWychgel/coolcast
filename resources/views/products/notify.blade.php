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
                    @if ($copylocation->expiration_date<$red)
                    <div class="red"></div>
                    @elseif (($copylocation->expiration_date<=$orange))
                    <div class="orange"></div>
                    @else 
                    <div class="green"></div>
                    @endif
                        <div class="card-body">
                            <div class="col d-flex justify-content-between">
                                <h5 class="card-title">{{$copylocation->name}}</h5>
                                <p class="card-text">{{$copylocation->expiration_date}}</p>
                                <div class="mt-3 pl-5">
                                    <input type="checkbox" class="selectbox custom-control-input  mt-1" name="product[]"
                                           value="{{$copylocation->copy_id}}" id="{{$copylocation->copy_id}}">
                                    <label class="custom-control-label mt-1" for="{{$copylocation->copy_id}}"></label>
                                    <a class="text-white bg-transparent mt-1" href="/products/{{$copylocation->copy_id}}/edit"><img src="/img/edit.png" alt="" width="20" height="20" class="align-self-center center ml-4"></a>
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


@endsection
