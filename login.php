<?php include 'includes/header.php'?>
<style type="text/css">
	.head{
		overflow: hidden;
	}
	.bd{
		box-shadow: 1px 1px 3px rgba(255, 0, 0, .5);
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
		<div class="head p-4 text-white bg-primary">
				<h3 class="float-left">Lista de usuarios</h3>
				

				
			</div>
		
				<form method="POST" class="bd p-3">
				<h3>Login</h3>

				<?php
					
					if (isset($_POST['save'])) {
						$userName=$_POST['uname'];
						$password=$_POST['pass'];
						if($userName=="admin" && $password=="admin123"){
							session_start();
							$_SESSION['username']=$userName;
							header('location: index.php');
						}
						if($userName=="ryan" && $password=="ryan123"){
							session_start();
							$_SESSION['username']=$userName;
							header('location: index.php');
						}
						if($userName=="juan" && $password=="juan123"){
							session_start();
							$_SESSION['username']=$userName;
							header('location: index.php');
						}
					}

				?>

				  <div class="form-group">
				    <label for="uname">Nombre de usuario</label>
				    <input type="text" class="form-control" id="uname" name="uname" placeholder="Nombre de usuario">
				  </div>

				  <div class="form-group">
				    <label for="pass">Contraseña</label>
				    <input type="password" class="form-control" id="pss" name="pass" placeholder="Ingresar contraseña">
				  </div>


				  <button type="submit" class="btn btn-primary" name="save">Iniciar sesion</button>
				</form>
			</div>
	</div>
</div>
<?php include 'includes/footer.php';?>