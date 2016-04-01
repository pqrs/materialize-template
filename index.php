<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

<!-- Material Design Icons courtesy of Google -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import jQuery before materialize.js-->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<!-- Turn the menu links into a hamburger icon -->
<script>
	$( document ).ready(function(){
		$(".button-collapse").sideNav();
	}); 
</script>



<html>
<head>
	<title>Materialize Template</title>

	
</head>
<body>

	<nav>
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="menu1.html">Menu 1</a></li>
				<li><a href="menu2.html">Menu 2</a></li>
				<li><a href="menu3.html">Menu 3</a></li>
				<li><a href="menu4.html">Menu 4</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="menu1.html">Menu 1</a></li>
				<li><a href="menu2.html">Menu 2</a></li>
				<li><a href="menu3.html">Menu 3</a></li>
				<li><a href="menu4.html">Menu 4</a></li>
			</ul>
		</div>
	</nav>


	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2016 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>


</body>

</html>