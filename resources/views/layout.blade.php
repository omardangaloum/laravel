  
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('../js/app.js') }}" defer></script>
        <script src="{{ asset('../js/mine.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
</head>
   <!--
********************************************************************
* Responsive Transparent Navbar
********************************************************************
-->
<div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
   
  <i class="fa fa-home" style="color:red;"></i>
    
  </button>
      <a class="navbar-brand" href="{{ route('home')}}" style="color:white !important;">Espace Etudiant</a>
      

    </div>
     @guest
     <a class="navbar-brand pull-right" href="{{ route('login') }}" style="color:white !important;">Sign in</a>
       <a class="navbar-brand pull-right" href="{{ route('register') }}" style="color:white !important;">Sign up</a>
       @else
        <a class="navbar-brand pull-right" href="{{ route('logout') }}" style="color:white !important;">Deconnexion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
        @endguest
        
    </div> -->
  </div>
</div>
<!-- <section class="banner">
<div class="container">
  <div class="row">
  <h1>Transparent Background Example</h1>
  </div>
  </div>
  </section> -->
 <br/>

<div class="container">
  <div class="row" style="height:800px;">
<div class="col-lg-12">
      @yield('content')
  </div>
  </div>



 