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

    @if(empty($product))
        <div class="container">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Oeps, er is hier helaas niks te vinden.</span>
                    <p>Voeg een product toe aan deze locatie met de onderstaande knop.</p>
                </div>
                <div class="card-action">
                    <a href="{{route('add')}}" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Klik hier</a>
                </div>
            </div>
        </div>
    @endif

    <div class="center bottom-navbar">
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">check</i></a>
        <a href="/add" class="btn-floating btn-large waves-effect waves-light mainaddbtn coolcastdarkblue"><i class="material-icons">add</i></a>
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">close</i></a>
    </div>

@endsection