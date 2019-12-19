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

    <form method="post" id="deleteform">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        @foreach ($invproducts as $invproduct)
            <div class="card bg-card mb-2">
                <div class="card-body">
                    <div class="col d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">{{$invproduct->name}}</h5>
                            <p class="card-text">{{$invproduct->expiration_date}}</p>
                        </div>

                        <div class="">
                            <input type="checkbox" class="custom-control-input selectbox" name="product[]"
                                   value="{{$invproduct->id}}" id="{{$invproduct->id}}">
                            <label class="custom-control-label" for="{{$invproduct->id}}"></label>
                        <a class="text-white bg-transparent" href="/products/{{$invproduct->id}}/edit">Edit</a>
                        </div>
                    </div>
                </div>
                <h1 class="hallo" style="display: none">hallo</h1>
            </div>
        @endforeach
    </form>

    <script>
        $('.selectall').click(function () {
            $('.selectbox').prop('checked', $(this).prop('checked'))
        });

        let checkbox = document.getElementsByClassName('selectbox');
        let deleteButton = document.getElementsByClassName("deleteButton");

        for (let i = 0; i < checkbox.length; i++) {
            checkbox[i].addEventListener('change', checkChecker);
        }

        function checkChecker() {
            for (let i = 0; i < checkbox.length; i++) {
                if (checkbox[i].checked) {
                    console.log("checked");
                    deleteButton[0].style.display = "block";
                } else {
                    console.log("unchecked");
                    deleteButton[0].style.display = "none";
                }
            }
        }

    </script>

    @include('partials._empty-error')

@endsection
