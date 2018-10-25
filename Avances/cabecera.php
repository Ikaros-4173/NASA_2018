

<!DOCTYPE html>
<html>
<body>
  <title>¡No olvides el abridor de latas!</title>

  <header>
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <div class="wrapper">
        <div class="logo"><img src="logo.png" border="0" width="50" height="70">¡No olvides el abrelatas!</div>
  			<nav>
  				<a href="#">Inicio</a>
  				<a href="#">Servicios</a>
  				<a href="#">Proyectos</a>
  				<a href="#">Contacto</a>
  			</nav>
  		</div>
  </header>

<style>
header {
	width:100%; /* Establecemos que el header abarque el 100% del documento */
	overflow:hidden; /* Eliminamos errores de float */
	background:#252932;
	margin-bottom:20px;
}

.wrapper {
	width:90%; /* Establecemos que el ancho sera del 90% */
	max-width:1000px; /* Aqui le decimos que el ancho máximo sera de 1000px */
	margin:auto; /* Centramos los elementos */
	overflow:hidden; /* Eliminamos errores de float */
}

header .logo {
	color:#f2f2f2;
	font-size:50px;
	line-height:200px;
	float:left;
}

header nav {
	float:right;
	line-height:200px;
}

header nav a {
	display:inline-block;
	color:#fff;
	text-decoration:none;
	padding:10px 20px;
	line-height:normal;
	font-size:20px;
	font-weight:bold;
	-webkit-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
}

header nav a:hover {
	background:#f56f3a;
	border-radius:50px;
}

.header2 {
	position: fixed;
	height:100px;
}

.header2 .logo {
	line-height:100px;
	font-size:30px;
}

.header2 nav {
	line-height:100px;
}
@media screen and (max-width: 950px) {
	header .logo,
	header nav {
		width:100%;
		text-align:center; /*Centramos el menu y el logotipo*/
		line-height:100px;
	}

	.header2 {
		height:auto;
	}

	.header2 .logo,
	.header2 nav {
		line-height:50px;
	}
}
}

</style>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</body>
</html>
