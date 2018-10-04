<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">


</head>


<body>

<div class="Caja container">

	<form method="POST" action="">
		<h1>Login</h1>

		  <div class="form-group">
			    <label>Correo</label>
			    <input type="email" class="form-control" id="Correo" placeholder="Correo" style="width: 50%">
			  </div>

			  <div class="form-group">
			    <label>Contraseña</label>
			    <input type="password" class="form-control" id="Contraseña" placeholder="Contraseña" style="width: 50%">
			  </div>		  

		  <button type="submit" class="btn btn-default">Entrar</button>
	</form>


<br>
	<a href="CrearCuenta.php" style="color: white">¿No Tienes Cuenta?</a>

</div>
</body>


</html>