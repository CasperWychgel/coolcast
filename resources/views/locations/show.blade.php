@extends ('layout')

@section('content')
    <div class="">
        <ul class="list-group m-3">
            @foreach ($invproducts as $invproduct)
                <li class="list-group-item mb-3 bg-primary rounded">
                    <a class="">{{$invproduct->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection