@extends ('layout')

@section('content')
    <style>
        body{
            background: rgb(7,144,96);
            background: -moz-linear-gradient(90deg, rgba(7,144,96,1) 0%, rgba(0,245,255,1) 100%);
            background: -webkit-linear-gradient(90deg, rgba(7,144,96,1) 0%, rgba(0,245,255,1) 100%);
            background: linear-gradient(90deg, rgba(7,144,96,1) 0%, rgba(0,245,255,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#079060",endColorstr="#00f5ff",GradientType=1);
        }
    </style>
    <div class="jumbotron jumbotron-fluid text-white bg-transparent mb-0">
        <div class="container">
            <h1 class="display-4 text-center">Nieuwe producten toevoegen</h1>
            <p class="lead text-center">Hier is het mogelijk om één of meerdere producten toe te voegen aan je CoolCast</p>
        </div>
    </div>
    <div class="container text-white">
        <form id="" method="POST" action="/products/add" >
            {{csrf_field()}}
            <p class="lead text-center">Kies uw producten</p>
            <div class="input-group mb-3 shadow-lg">
                <select name="name[]" class="custom-select myselect" multiple>
                    @foreach ($products as $product)
                        <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="input-group mb-3 shadow-lg">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect02">Locatie</label>
                </div>
                <select name="location" class="custom-select">
                    @foreach ($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" name="action" class="text-white btn btn-block btn-light bg-transparent shadow-lg">Add to your CoolCast</button>
        </form>
    </div>

<script type="text/javascript">
    $(".myselect").select2();
</script>

@endsection