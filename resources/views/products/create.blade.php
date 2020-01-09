@extends ('layout')

@php
 $test = true;

@endphp

@section('content')
    <div class="jumbotron jumbotron-fluid text-black bg-transparent mb-0 bg">
        <div class="container">
            <h1 class="display-4 text-center">Nieuwe producten toevoegen</h1>
            <p class="lead text-center">Hier is het mogelijk om één of meerdere producten toe te voegen aan je CoolCast</p>
        </div>
    </div>
    <div class="container text-black">
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
            <button type="submit" name="action" class="text-white btn btn-block btn-info bg-darkblue shadow-lg">Add to your CoolCast</button>
        </form>
    </div>

{{-- Hier Nav bottom --}}

<script type="text/javascript">
    $(".myselect").select2();
</script>

@endsection