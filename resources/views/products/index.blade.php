@extends ('layout')

@section('content')
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <main role="main" class="inner cover text-center">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Uw producten
                </a>
                @foreach ($invproducts as $invproduct)
                    <a href="#" class="list-group-item list-group-item-action">{{$invproduct->name}}  {{$invproduct->expiration_date}}</a>
                @endforeach
            </div>
        </main>

        <footer class="mastfoot mt-auto text-center fixed-bottom bg-dark">
            <div class="inner">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="" class="btn btn-secondary">Delete</a>
                    <a href="/add" class="btn btn-secondary">Add</a>
                    <a href="" class="btn btn-secondary">Update</a>
                </div>
            </div>
        </footer>
    </div>



@endsection