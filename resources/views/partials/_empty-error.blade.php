@if(empty($invproduct))
    <div class="container alert alert-primary">
        <div>
            <h1>Oeps, er is hier helaas niks te vinden.</h1>
            <p>Voeg een product toe aan deze locatie met de onderstaande knop.</p>
        </div>
        <div class="card-action">
            <a href="{{route('add')}}" class="link"><i class="material-icons left"></i>Klik hier</a>
        </div>
    </div>
    </div>
@endif