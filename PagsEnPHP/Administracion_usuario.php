<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="José Luis Jurado Ortiz">
    <link rel="stylesheet" href="css/cssInstalaciones.css">
    <link rel="stylesheet" href="css/cssInicio.css">
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg">
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>

    <?php 
	include "php/menu.php";
	 ?>
    <div style=" margin-right: 7%; margin-left: 7%;">
        <div style="margin-top: 2%; margin-bottom: 2%; text-align: end;">
            <p style="text-align: left"></p>
            <img src="imagenes\caritaTriste.png" alt="ImagenDelUsuario" height="5%" width="5%" class=""
                style="margin-right: 0%; margin-bottom: 0%; float: left">
            Aquí estoy escribiendo el supuesto texto que iría junto al usuario, todavía no se cual es, pero en cuyo
            caso aquí está. Estoy
            probando como quedaría el texto escribiendo un texto largo aquí al lado y me doy estoy dando cuenta de
            que
            la reserva de salas está quedando muy feo, habrá que cambiarlo de alguna forma.
            </p>
        </div>
        <div style="margin-top: 2%; margin-bottom: 2%; padding: 5%;">
            <main>
                <form method="GET">
                    <legend style="text-align: center;"><u>Reserva de salas</u></legend>
                    <fieldset>
                        <label style="text-align: left">Reserve un día:</label>
                        <section style="margin-bottom: 1%; margin-top: 1%;">
                            <label>
                                Desde: <input type="datetime-local">
                            </label>
                        </section>
                        <section >
                            <label>
                                Hasta: <input type="datetime-local">
                            </label>
                        </section>
                    </fieldset>
                    <button type="submit">Input</button>
                </form>
            </main>
            <section style="margin-right: 20%; margin-left: 20%; margin-bottom: 5%">
                <p style="float:left">Fecha último pago</p>
                <p style="float:right">Habitación Actual</p>
            </section>
            <section style="margin-right: 20%; margin-left: 20%; margin-bottom: 5%">
                <p style="float:left">Fecha de entrada</p>
                <p style="float:right">Pago realizado</p>
            </section>
            <section style="margin-right: 20%; margin-left: 20%; margin-bottom: 5%">
                <p style="margin-top: 20%; text-align: left">Fecha de salida</p>
            </section>
        </div>
    </div>
		<?php 
	include "php/pie.php";
	 ?>
	
</html>
