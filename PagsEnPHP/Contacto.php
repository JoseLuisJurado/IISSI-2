<?php
	session_start();
	
	// Importar librerías necesarias para gestionar direcciones y géneros literarios
	require_once("ConexionBD.php");
	
	// Si no existen datos del formulario en la sesión, se crea una entrada con valores por defecto
	if (!isset($_SESSION["formulario"])) {
		$formulario['Nombre'] = "";
		$formulario['PrimerApellido'] = "";
		$formulario['SegundoApellido'] = "";
		$formulario['CorreoElectronico'] = "";
		$formulario['Asunto'] = "";
		$formulario['Mensaje'] = "";
	
		$_SESSION["formulario"] = $formulario;
	}
	// Si ya existían valores, los cogemos para inicializar el formulario
	else
		$formulario = $_SESSION["formulario"];
			
	// Si hay errores de validación, hay que mostrarlos y marcar los campos (El estilo viene dado y ya se explicará)
	if (isset($_SESSION["errores"])){
		$errores = $_SESSION["errores"];
		unset($_SESSION["errores"]);
	}
		
	// Creamos una conexión con la BD
	print_r($_SESSION);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <link rel="stylesheet" href="css/cssContacto.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
    <?php
    include "php/menu.php";
    ?>

    <fieldset>
        <div class="margenFormulario">

            <h2>
                Contacto
            </h2>
            <p class="texto">
                Residencia estudiantil Bahia
            </p>

            <p class="texto">
                C/S.Alejandro, 179, 11510, Puerto Real, Cádiz
            </p>

            <p class="texto">
                954-789-856-1
            </p>

            <p class="texto">
                CorreoFalso@gmaol.ez
            </p>

            <h2>
                Consulta
            </h2>

            <form method="POST" name="formularioContacto" if="formularioContacto" action="">
                <section>
                    <label>
                        Nombre*: <input type="text" name="FirstName" id="FirstName" class="margenGeneral" required>
                    </label>
                </section>
                <section>
                    <label>
                        Primer Apellido*: <input type="text" name="Primer Apellido" id="Primer Apellido" class="margenGeneral" required>
                    </label>
                </section>
                <section>
                    <label>
                        Segundo Apellido: <input type="text" name="Segundo Apellido" id="Segundo Apellido" class="margenGeneral" required>
                    </label>
                </section>

                <section class="margenGeneral">
                    <label>
                        Correo electrónico*: <input type="email" name="Correo electrónico" id="Correo electrónico" class="margenSexo" required>
                    </label>
                </section>

                <section class="margenGeneral">
                    <section>
                        Asunto*: <input type="text" name="Asunto" id="Asunto" maxlength="100" class="margenGeneral" required>
                    </section>
                    <section style="margin-top: 1%; margin-bottom: 1%">
                        Mensaje*:
                    </section>
                    <textarea name="Mensaje" rows=10 cols=140 maxlength="600">
                            </textarea>

                </section>

                <input type="submit" title="Enviar" name="Enviar" id=Enviar>
            </form>
        </div>
    </fieldset>
    <?php
    include "php/pie.php";
    ?>
</body>

</html>
