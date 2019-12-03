@if(empty($invproduct))
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Oeps, er is hier helaas niks te vinden.</h1>
            <p class="lead">Voeg een product toe aan deze locatie met de onderstaande knop.</p>
            <hr class="my-4">

            <a class="btn btn-primary btn-lg" href="{{route('add')}}" role="button">Voeg een product toe</a>
        </div>
    </div>
@endif