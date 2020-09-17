<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
<link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('Admin/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('Admin/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('Admin/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('Admin/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('Admin/css/matrix-media.css')}}" />
<link href="{{asset('Admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="{{asset('Admin/css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
    <body>
        <div id="app2">
            <admin-app></admin-app>
       </div>


       <script src="{{asset('Admin/js/excanvas.min.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.min.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.ui.custom.js')}}"></script>
       <script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.flot.min.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.flot.resize.min.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.peity.min.js')}}"></script>
       <script src="{{asset('Admin/js/fullcalendar.min.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.dashboard.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.gritter.min.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.interface.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.chat.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.validate.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.form_validation.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.wizard.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.uniform.js')}}"></script>
       <script src="{{asset('Admin/js/select2.min.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.popover.js')}}"></script>
       <script src="{{asset('Admin/js/jquery.dataTables.min.js')}}"></script>
       <script src="{{asset('Admin/js/matrix.tables.js')}}"></script>

    </body>
</html>
