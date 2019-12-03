@extends ('layout')

@section('content')

        <div class="card-header">
            Your products
        </div>
            <div class="card-body">
                @foreach ($invproducts as $invproduct)
                <div class="card mb-2" style="">
                    <div class="card-body bg-card">
                    <h5 class="card-title">{{$invproduct->name}}</h5>
                      <p class="card-text">27/11/2019</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center pt-5">
                    <button type="button" class="btn-primary btn-circle btn-xl mr-2 bg-blue"><img src="../img/delete.png" alt="" width="20" height="20">
                    </button>
                    <button type="button" class="btn-success btn-circle-l bg-darkblue"><img src="../img/add.png" alt="" width="20" height="20">
                    </button>
                    <button type="button" class="btn-success btn-circle btn-xl ml-2 bg-blue"><img src="../img/edit.png" alt="" width="20" height="20">
                    </button>
        </div>
@endsection