<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('Titulo')</title>
</head>
<body>
	<nav>
		<?php echo "<li><a href =". route('home').">Home</a></li>";?>
		<?php echo "<li><a href =". route('Quienessomos').">Quienes somos</a></li>";?>
		<?php echo "<li><a href =". route('contactanos').">Contactanos</a></li>";?>
	</nav>
	<h1>@yield('TP')</h1>
	<footer>Pie de pagina</footer>
</body>
</html>