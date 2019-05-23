<?php
	session_start();
  	
  	include_once("conexionBD.php");
 	include_once("funcionLogin.php");
	
	if (isset($_REQUEST['Enviar'])){
		$email= $_REQUEST['Email'];
		$pass = $_REQUEST['Contraseña'];
		$conexion = crearconexionBD();
		$num_usuarios = consultarUsuario($conexion,$email,$pass);
		cerrarConexionBD($conexion);	
	
		if ($num_usuarios == 0)
			$login = "error";	
        
        else {
            
            $_SESSION['login'] = $email;
            if($_SESSION['login'] == 'margarita@gmail.com') Header("Location: administracionDirector.php");
			else Header("Location: Perfil.php");
		}	
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="stylesheet" href="css/inicio_sesion.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>
<body>
    <?php
    include "php/menu.php";
    ?>
    <div>
        <main class="main">
            <form method="get" action="Inicio_sesion.php">
                <fieldset class="field">
                    <legend><u> Iniciar sesión</u></legend>
                    <section>
                        <label>
                            Email: <input type="text" name="Email" id="Email" placeholder="EmailDeEjemplo@gmail.com" required>
                        </label>
                    </section>
                    <section>
                        <label>
                            Contraseña: <input type="password" name="Contraseña" id="Contraseña" placeholder="Ejemplo: 123456abcdef" required>
                        </label>
                        <div>
                            <label>
                                ¿Aun no has hecho tu reserva? <a href="formulario-reserva.php">Reserva Aquí</a>
                            </label>
                        </div>
                        	<label>
                        		   <?php if (isset($login)) {
									echo "<div class=\"error\">";
									echo "Error en la contraseña o no existe el usuario.";
									echo "</div>";
										}	
									?>
                        	</label>
                    </section>
                </fieldset>
                <input type="submit" title="Enviar" name="Enviar">
            </form>
        </main>
    </div>
    <?php
    include "php/pie.php";
    ?>
</body>

</html>
