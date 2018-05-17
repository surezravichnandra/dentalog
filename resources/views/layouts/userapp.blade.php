<!DOCTYPE html>
<html lang="en">
<head>

  <title>@yield('Title')</title> 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
  <link href="{{ URL::asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/non-responsive.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/sidebar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/datepicker.css')}}"/>
  <link rel="stylesheet" href="{{ URL::asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <script src="{{ URL::asset('assets/js/ie-emulation-modes-warning.js')}}"></script>
</head>
<body>
      
  <div id="wrapper">

    @section('body')

    @show 

    @include('layouts.footer')
    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script>window.jQuery || document.write('<script src="{{ URL::asset('assets/js/vendor/jquery.min.js')}}"><\/script>')</script>

  <script src="{{ URL::asset('dist/js/bootstrap.min.js')}}"></script>

  <script src="{{ URL::asset('js/datepicker.min.js')}}"></script>  

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <link rel="stylesheet" href="{{ URL::asset('js/jquery.autocomplete.css')}}">

  <script src="{{ URL::asset('js/jquery.autocomplete.js')}}" type="text/javascript"></script>

  @section('jquery')

  @show

  </body>
</html>