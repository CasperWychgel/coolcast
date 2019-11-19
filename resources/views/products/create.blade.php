@extends ('layout')

@section('content')

    <div class="container">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="img/logo/Fridge.svg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
              <span class="black-text">
                This is where you can add products to your inventory. Fill in the form below to get started.
              </span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container scrolling z-depth-1 white">
        <div class="row">
            <form id="createform" method="POST" action="/add" class="col s12">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col push-s1 s10">
                        <p>What is the product called?</p>
                        <input placeholder="Product name" name="name" type="text" class="validate">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col push-s1 s10">
                    <div class="col-xs-6">
					<input readonly class="form-control" name="expiration_date" type="text" id="example" placeholder="Pick an expiration date">
				</div>
                        
                    </div>
                </div>
                <div class="input-field col push-s1 s10">
                    <select name="location">
                        @foreach ($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    <label>Select your location</label>
                </div>
                <div class="container center-align">
                    <button class="btn-large waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="container" style="padding-bottom: 100px">
                    
                </div>
            </form>
        </div>
    </div>


    <div class="center bottom-navbar">
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">check</i></a>
        <a class="btn-floating btn-large waves-effect waves-light mainaddbtn coolcastdarkblue"><i class="material-icons">add</i></a>
        <a class="btn-floating btn-small waves-effect waves-light coolcastblue"><i class="material-icons">close</i></a>
    </div>
    <script>
		window.onload = function() {

            new Rolldate({
    el: '#example',
    format: 'DD-MMM-YYYY'
})
new Rolldate({
    el: '#example',
    minStep: 3
})
new Rolldate({
    el: '#example',
    beginYear: 2019,
    endYear: 2100
})
new Rolldate({
    el: '#example',
    trigger: 'tap'
})
new Rolldate({
    el: '#example',
    lang: { 
      title: 'Select A Date', 
      cancel: 'Cancel', 
      confirm: 'Confirm', 
      year: '', 
      month: '', 
      day: '', 
      hour: '', 
      min: '', 
      sec: '' 
    }
})
new Rolldate({
    el: '#example',
    init: function() {
      console.log('On init');
    },
    moveEnd: function(scroll) {
      console.log(scroll)
      console.log('scroll end');
    },
    confirm: function(date) {
      console.log(date)
      console.log('confirm');
    },
    cancel: function() {
      console.log('cancel');
    }
})
new Rolldate({
    el: '#example',
    value: '2017-10-21 23:52:50'
})

		}
	</script>

@endsection