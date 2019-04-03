<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="stylesheet" href="css/inicio_sesion.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
</head>

<body>
	<?php 
	include "php/menu.php";
	 ?>
	 <div>
        <main class="main">
            <form>
                <fieldset class="field">
                    <legend><u> Iniciar sesión como usuarío </u></legend>
                    <section>
                        <label>
                            Usuario: <input type="text" name="Usuario" id="Usuario" placeholder="Mi nombre de usuario" required>
                        </label>
                    </section>
                    <section>
                        <label>
                            Contraseña: <input type="password" name="Contraseña" id="Contraseña"
                                placeholder="Ejemplo: 123456abcdef" required>
                        </label>
                    </section>
                </fieldset>
                <input type="submit" title="Enviar">
            </form>
        </main>
    </div>
	 <?php 
	include "php/pie.php";
	 ?>
</body>
</html>