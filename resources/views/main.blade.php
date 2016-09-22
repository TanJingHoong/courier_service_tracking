<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials\_head')
</head>

<body>
  <!-- Default Bootstrap Navbar -->
	@include('partials\_nav')
    
    <div class = "container">

    @yield('content')
    
	@include('partials\_footer')
   
    </div><!-- end of .container -->


	@include('partials\_javascript')

	<!-- Scripts -->
    <script src="/js/app.js"></script>
  
	@yield('scripts')

  </body>

</html> 