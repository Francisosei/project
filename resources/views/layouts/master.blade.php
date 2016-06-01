<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
        <title>UCC STUDENT RECRUITMENT SYSTEM</title>

        <!-- Bootstrap -->
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-responsive.min.css')}}">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery.ui.theme.css')}}">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<!-- Color CSS -->
	<link rel="stylesheet" href="{{URL::asset('css/themes.css')}}">


	<!-- jQuery -->
	<script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery-1.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.core.min.js')}}"></script>
	<script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.widget.min.js')}}"></script>
	<script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.mouse.min.js')}}"></script>
	<script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.resizable.min.js')}}"></script>
	<!-- slimScroll -->
	<script src="{{URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<!-- Bootbox -->
	<script src="{{URL::asset('js/plugins/bootbox/jquery.bootbox.js')}}"></script>
	<!-- Bootbox -->
	<script src="{{URL::asset('js/plugins/form/jquery.form.min.js')}}"></script>
	<!-- Validation -->
	<script src="{{URL::asset('js/plugins/validation/jquery.validate.min.js')}}"></script>
	<script src="{{URL::asset('js/plugins/validation/additional-methods.min.js')}}"></script>

	<!-- Theme framework -->
	<script src="{{URL::asset('js/eakroko.min.js')}}"></script>
	<!-- Theme scripts -->
	<script src="{{URL::asset('js/application.min.js')}}"></script>
	<!-- Just for demonstration -->
	<script src="{{URL::asset('js/demonstration.min.js')}}"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="{{URL::asset('img/apple-touch-icon-precomposed.png')}}" />

        <!-- Styles -->
        <link href="{{asset(css/bootstrap.min.css')}}" rel="stylesheet">
        
        
    
    
</head>
    <body>
        
        @include('layouts.partials.nav')
        <div>
        
            
        @yield('content')
        </div>
        
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
            <script src="{{URL::asset('js/bootstrap.js')}}"></script>
            <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
            
            
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} 
    
    <script type="text/javascript">
      var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38620714-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
       
    </body>
</html>