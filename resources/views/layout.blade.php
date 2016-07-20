<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{"Testing Site"}}</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div >
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Book management</a>
  </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/book/list">All</a></li>
      <li><a href="/book/add">Add</a></li> 
      <li><a href="#">About</a></li> 
  </ul>
</div>
</nav>
	@yield('header')
</div>
<div>
	@yield('content')
		
</div>
<div>
	@yield('footer')
</div>
</body>
</html>