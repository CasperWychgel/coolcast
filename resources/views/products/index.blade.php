@extends ('layout')

@section('content')
    <div class="card" style="width: 100%;">
        <div class="card-header">
            Your products
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($invproducts as $invproduct)
                <li class="list-group-item">{{$invproduct->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection