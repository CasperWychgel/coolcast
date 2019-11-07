<nav>
    <div class="nav-wrapper coolcastblue">
        <a href="/" class="brand-logo white-text center"><span>CoolCast</span></a>
        <a data-target="slide-out" style="display: block" class="sidenav-trigger"><i  class="material-icons white-text">menu</i></a>
    </div>
</nav>

<ul id="slide-out" class="sidenav" style="transform: translateX(-105%);">
    <li><div class="user-view">
            <div class="background coolcastblue"></div>
            <a><img class="circle" src="../img/logo/Fridge.svg"></a>
            <a><span class="white-text name">CoolCast</span></a>
            <a href=""><span class="white-text email">info@coolcast.nl</span></a>
        </div></li>
    <li><a class="subheader">Your locations</a></li>
    @foreach($locations as $location)
        <li><a href="/locations/{{ $location->id }}">{{ $location->name }}</a></li>
    @endforeach
</ul>