<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fl-bigmug-line.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.min.css')}}">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <div id="app">
            <main-app></main-app>
       </div>


  <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
   <script src="{{ asset('frontend/js/aos.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('frontend/js/js/jquery-ui.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('frontend/js/main.js')}}"></script>

  <script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };

    function initAutocomplete() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
          {types: ['geocode']});

      // When the user selects an address from the dropdown, populate the address
      // fields in the form.
      autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();

      for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
      }

      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
        }
      }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }
  </script>
    </body>
</html>
