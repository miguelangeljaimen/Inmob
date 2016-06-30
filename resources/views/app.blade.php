<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
 
	{!! Html::style('assets/css/bootstrap.css') !!}
 
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
 
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">INMOB</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			    	<li><a href="{{route('admin.clientes.index')}}">Clientes</a></li>
			    	<li><a href="{{route('admin.propiedades.index')}}">Propiedades</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				         <li><a href="{{route('auth/login')}}">Login</a></li>
						<li><a href="{{route('auth/register')}}">Register</a></li>
				    @else
		                <li>
		                    <a href="#">{{ Auth::user()->nombres_user }}</a>
		                </li>
		                <li><a href="{{route('auth/logout')}}">Logout</a></li>
		                
			        @endif
				</ul>
			</div>
		</div>
	</nav>
 
	@yield('content')
 
	<!-- Scripts -->
	{!! Html::script('assets/js/jquery-2.1.4.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/utilidades.js') !!}

</body>
</html>