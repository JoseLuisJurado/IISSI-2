<!DOCTYPE html>
<html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/css404.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/jpeg" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
<?php 
	include "php/menu.php";
	 ?>
    <div>
        <main style="margin: 5% 20% 20% 20%;">
            <form>
                <fieldset style="padding: 5%">
                    <legend><u> Entrada a la administración </u></legend>
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
</html>

