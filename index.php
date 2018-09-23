<?php include_once 'addToJSON.php'; ?>
<?php include_once 'parseJSON.php'; ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Menú</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="fuente.css" rel="style">
		<style>
				body {
					position: relative;
				}

				#section1 {
					padding-top: 50px;
					height: 800px;
					background:url("imagenes/a.jpg" ) no-repeat;
					background-size: 100%;
					font-size: 20px;
					font-style: italic;

				}

				#section2 {
					padding-top: 50px;
					height: 800px;
					font-size: 20px;
					font-style: italic;
					background:url("imagenes/comidda.jpg" ) no-repeat;
					background-size: 100%;
				}

				#section3 {
					padding-top: 50px;
					height: 800px;
					font-size: 20px;
					font-style: italic;
					background:url("imagenes/comida.jpeg" ) no-repeat;
					background-size: 100%;
				}

				  #section4 {
					padding-top: 50px;
					height: 800px;
					font-size: 20px;
					font-style: italic;
					background:url("imagenes/postre.jpg" ) no-repeat;
					background-size: 100%;
				}
				#section5 {
					padding-top: 50px;
					height: 800px;
					font-size: 20px;
					font-style: italic;
					background:url("imagenes/bebida.jpg" ) no-repeat;
					background-size: 100%;
				}


		</style>

	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="50">

			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Lalo's Restaurant</a>
					</div>
					<div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="#section1">Menu de Desayunos</a></li>
								<li><a href="#section2">Menu de Comidas</a></li>
								<li><a href="#section3">Menu de Cenas</a></li>
								<li><a href="#section4">Menu de Postres</a></li>
								<li><a href="#section5">Menu de Bebidas</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
		 						<li><a href="administradores.html"><span class="glyphicon glyphicon-user"></span> Administradores.</a></li>
	 						</ul>
						</div>
					</div>
				</div>
			</nav>

			<div id="section1" class="container-fluid">
				<h1>Desayuno</h1>
				<p>
				<?php
					foreach($objDesayunos as $objD){
						echo '<strong>Platillo: </strong>' . $objD->name . '<br /><strong> Descripción: </strong>' . $objD->desc. '<br/><strong> Precio: </strong>' . $objD->prize . ' <hr />';
					}
				?></p>

			</div>
			<div id="section2" class="container-fluid">
				<h1>Comida</h1>
				<p><?php
					foreach($objComidas as $objC){
						echo '<strong>Platillo: </strong>' . $objC->name . '<br /><strong> Descripción: </strong>' . $objC->desc. '<br/><strong> Precio: </strong>' . $objC->prize . ' <hr />';
					}
				?></</p>

			</div>
			<div id="section3" class="container-fluid">
				<h1>Cena</h1>
				<p>
				<?php
					foreach($objCenas as $objCe){
						echo '<strong>Platillo: </strong>' . $objCe->name . '<br /><strong> Descripción: </strong>' . $objCe->desc. '<br/><strong> Precio: </strong>' . $objCe->prize . ' <hr />';
					}
				?></</p>

			</div>
			<div id="section4" class="container-fluid">
					<h1>Postre</h1>
					<p>
					<?php
						foreach($objPostres as $objP){
							echo '<strong>Platillo: </strong>' . $objP->name . '<br /><strong> Descripción: </strong>' . $objP->desc. '<br/><strong> Precio: </strong>' . $objP->prize . ' <hr />';
						}
					?></</p>

			</div>
			<div id="section5" class="container-fluid">
					<h1>Bebida</h1>
					<p>
					<?php
						foreach($objBebidas as $objB){
							echo '<strong>Platillo: </strong>' . $objB->name . '<br/><strong> Precio: </strong>' . $objB->prize . ' <hr />';
						}
					?>
					</</p>
			</div>
		</body>

</html>
