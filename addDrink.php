<?php include_once 'addToDrink.php'; ?>
<?php include_once 'parseJSON.php'; ?>
<!DOCTYPE html>
 <html>
  <head>
	<title>Agregar Bebidas</title>
  <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
    <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Lalo's restaurant</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="addBreak.php">Desayunos</a></li>
            <li><a href="addFood.php">Comidas</a></li>
            <li><a href="addDinner.php">Cenas</a></li>
            <li><a href="addDessert.php">Postres</a></li>
            <li class="active"><a href="addDrink.php">Bebidas</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>Home</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
    		<div class="row">
    		<div class="col-md-4">
          <h3 align="">Agregar bebida</h3><br />
          	<form method="post">
            <?php
            	if(isset($error))
             	{
              	echo $error;
            	}
            ?>
            <br />
            <label>Nombre de la bebida</label>
            <input type="text" name="name" class="form-control" /><br />
            <label>Precio</precio>
            <input type="number" name="precio" class="form-control"/><br />
            <input type="submit" name="submit" value="Agregar a bebidas" class="btn btn-info" /><br /><br />
            </form>
    		</div>
    	  <div class="col-md-8">
    		<h3>Results of reading JSON data file</h3>
    			<?php
    				foreach($objBebidas as $obj){
	              echo '<strong>Platillo: </strong>' . $obj->name . '<br/><strong> Precio: </strong>' . $obj->prize . ' <hr />';    				}
    			?>
    		</div>
    		</div>
        </div>
    </body>
</html>
