<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	 @yield('title')
	</title>
	 <link rel="stylesheet" href="../css/app.css">
	<script src="../js/app.js"></script>
	<script src="../js/jquery-2.2.4.min.js"></script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			@yield('content')				
			</div>
		</div>
	</div>
	<script src="../js/script.js"></script>
</body>
</html>