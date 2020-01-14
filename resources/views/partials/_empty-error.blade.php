@if(empty($userproduct))
    <div class="d-block d-sm-none">

            <div class="container mb-5">
                <p class="lead text-center">Oeps, er is hier helaas niks te vinden.</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-block btn-lg" href="{{route('add')}}" role="button">Voeg producten toe</a>
            </div>

    </div>
    <div class="d-none d-sm-block">
        <div class="jumbotron mb-5">
            <div class="container mb-5">
                <h1 class="display-4">Oeps, er is hier helaas niks te vinden.</h1>
                <p class="lead">Voeg een product toe aan deze locatie met de onderstaande knop.</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="{{route('add')}}" role="button">Voeg producten toe</a>
            </div>
        </div>
    </div>


@endif