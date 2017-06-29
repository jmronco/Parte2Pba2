<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesión</title><br>
    </head>
    <body>
        <form method="POST" action="">
            <div><label>Usuario</label><br><input type="text" name="usuario"></div>
            <div><label>Clave</label><br><input type="password" name="clave"></div>
            <input type="submit" value="Ingresar Datos">
            
            <?php
if(isset($_POST["submit"])){

if(!empty($_POST['usuario']) && !empty($_POST['clave'])) {
	$user=$_POST['usuario'];
	$pass=$_POST['clave'];
	
        var_dump('Usuario');


	$mysqli = new mysqli('localhost', 'root', 'avaras08', 'bdd');
	$sql= ("SELECT * FROM usuario WHERE usuario='".$user."' AND clave='".$pass."'");
	
	$result = $mysqli->query($sql);

	
	$row = $result->fetch_array(MYSQLI_ASSOC);

	

	if ($result != NULL)
	{

	if($user == $row['usuario'] && $pass == $row['clave'])
	{

	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: index.php");
	}
	} else {
	echo "La Clave o Usuario es invalida!";
	}

} else {
	echo "Todos los campos son requeridos!";
}
}
?>
        </form>
    </body>
</html>