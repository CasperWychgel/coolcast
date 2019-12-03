@extends ('layout')
@if ($invproducts->isempty())
    <script>window.location = "/home";</script>
@endif

@section('content')

    <div class="container-fluid text-center">
        <p>
            deze producten zijn bijna over de datum:
        </p>
    </div>
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
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
