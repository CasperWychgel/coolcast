
@extends ('layout')

@section('navigation')

    <nav>
        <div class="nav-wrapper coolcastblue">
            <a href="index.php" class="brand-logo white-text center"><span>CoolCast</span></a>
            <a data-target="slide-out" style="display: block" class="sidenav-trigger"><i style="color: black" class="material-icons ">menu</i></a>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav" style="transform: translateX(-105%);">
        <li><div class="user-view">
                <div class="background coolcastblue"></div>
                <a><img class="circle" src="img/logo/Fridge.svg"></a>
                <a><span class="white-text name">CoolCast</span></a>
                <a href=""><span class="white-text email">info@coolcast.nl</span></a>
            </div></li>
        <li><a class="subheader">Your locations</a></li>
        <li><a href="">Keuken</a></li>
        <li><a href="">Voorraadkast</a></li>
        <li><a href="">Bijkeuken</a></li>
    </ul>

@endsection

@section('content')

    <div class="">
        <div class="collection with-header"style="margin-top: 0px;">

            @foreach ($products as $product)
                <a href="#!" class="collection-item"><span class="badge">26-10-19</span>{{$product->name}}</a>
            @endforeach





        </div>
    </div>

    <div class="button-controls">
        <div class="center-align center">
            <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">check</i></a>
            <a href="/add" class="btn-floating btn-large waves-effect waves-light mainaddbtn coolcastdarkblue"><i class="material-icons">add</i></a>
            <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">close</i></a>
        </div>
    </div>

@endsection