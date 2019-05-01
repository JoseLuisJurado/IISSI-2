﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <link rel="stylesheet" href="css/tarjeta.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
<?php 
		include "php/menu.php";
	 	?>
    <h4 class=".text-tarjeta">Pago con tarjeta</h4>
    <fieldset>
        <div class="margenFormulario">
            <form method="GET">
                Número de tarjeta: <input type="text" name="Número" pattern="[0-9]{16}" required><br>

                <div class="form-group" id="expiration-date">
                    <label>Expiration Date</label>
                    <select>
                        <option value="01">Enero</option>
                        <option value="02">Febrero </option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                    <select>
                        <option value="19"> 2019</option>
                        <option value="20"> 2020</option>
                        <option value="21"> 2021</option>
                        <option value="22"> 2022</option>
                        <option value="23"> 2023</option>
                        <option value="24"> 2024</option>
                        <option value="25"> 2025</option>
                        <option value="26"> 2026</option>
                        <option value="27"> 2027</option>
                        <option value="28"> 2028</option>
                        <option value="29"> 2029</option>
                    </select><br>
                    CVV<input type="password" name="CVV" pattern="[0-9]{3}">
                </div>

        </div><br>

        <input type="submit" title="Enviar">
        </form>
        </div>
    </fieldset>
     <?php 
	include "php/pie.php";
	 ?>
</body>

</html>