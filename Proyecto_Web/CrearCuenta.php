<!DOCTYPE html>
<html>
<head>
	<title>Crear Cuenta</title>

	<link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">

</head>
<body>

	<div class="Caja container">

	<form action="" method="POST">
		<h1>Crear Cuenta</h1>

			<div class="form-group">
			    <label>Nombres</label>
			    <input type="text" class="form-control" id="Nombres" placeholder="Nombres" style="width: 50%">
			  </div>

			  <div class="form-group">
			    <label>Apellidos</label>
			    <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" style="width: 50%">
			  </div>

			  <div class="form-group">
			    <label >Direccion</label>
			    <input type="password" class="form-control" id="Direccion" placeholder="Direccion" style="width: 50%">
			  </div>		 

		  	  <div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" id="Correo" placeholder="Correo" style="width: 50%">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" id="Contraseña" placeholder="Contraseña" style="width: 50%">
			  </div>		

		  <button type="submit" class="btn btn-default">Registrar</button>

	</form>


</div>

</body>
</html>