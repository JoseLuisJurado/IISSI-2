<?php
	session_start();
	
	// Importar librerías necesarias para gestionar direcciones y géneros literarios
	require_once("ConexionBD.php");
	
	// Si no existen datos del formulario en la sesión, se crea una entrada con valores por defecto
	if (!isset($_SESSION["formulario"])) {
		$formulario['DNI'] = "";
		$formulario['Nombre'] = "";
		$formulario['PrimerApellido'] = "";
		$formulario['SegundoApellido'] = "";
		$formulario['Sexo'] = "";
		$formulario['MayoriaEdad'] = "";
		$formulario['paises'] = "";
		$formulario['Poblacion'] = "";
		$formulario['CodigoPostal'] = "";
		$formulario['Domicilio'] = "";
		$formulario['CorreoElectronico'] = "";
		$formulario['CorreoPadre'] = "";
		$formulario['pass'] = "";
		$formulario['FechaLlegada'] = "";
		$formulario['FechaSalida'] = "";
		$formulario['TipoPago'] = "";
		$formulario['FormaPago'] = "";
		$formulario['pagoComedor'] = "";
	
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
?>

		<?php
        include "php/funciones.php";
        ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/formulario-reserva.css"/>
    <link rel="stylesheet" href="css/cssInicio.css"/>
    <script src="javascript/validacionFormulario.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
    <div>
        <?php
        include "php/menu.php";
        ?>

    </div>
    <form name="formularioReserva" method="post" onsubmit="return validacionGeneral()" action="validacionReserva.php">
        <fieldset>
            <legend>Datos Personales</legend>
            <section>
                <label>
                    DNI: <input type="text" name="DNI" id="DNI" placeholder="12345678A" maxlength="9" oninput="inputDNI()" required><span id="TextoDNI"></span>
                </label>
            </section>
            <section>
                <label>
                    Nombre: <input type="text" name="Nombre" id="Nombre" maxlenght="50" class="margenGeneral" required>
                </label>
            </section>
            <section>
                <label>
                    Primer Apellido: <input type="text" name="PrimerApellido" maxlenght="50" id="PrimerApellido" class="margenGeneral" required>
                </label>
            </section>
            <section>
                <label>
                    Segundo Apellido: <input type="text" name="SegundoApellido" maxlenght="50" id="SegundoApellido" class="margenGeneral" required>
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Sexo:
                    <input value="hombre" name="Sexo" id="Sexo" type="radio" required>Hombre
                    <input value="mujer" name="Sexo" id="Sexo" type="radio">Mujer
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Eres mayor de edad?: <input type="checkbox" name="MayoriaEdad" id="MayoriaEdad">
                </label>
            </section>
        </fieldset>
        <fieldset class="margenGeneral">
            <legend>Otros Datos de Importancia</legend>
            <section>
                <label for="paises"> País:
                    <select name="paises" id="paises">
                        <?php
                        $selected = "";
                        foreach ($paises as $p => $paises) {
                            $selected = ($p == $default_paises) ? "selected" : "";
                            echo "<option $selected value='$p'>$paises</option>";
                        }
                        ?>
                    </select>
                </label>
                <label>
                    Población: <input type="text" name="Poblacion" id="Poblacion" maxlength="50" class="margenSexo" placeholder="Sevilla">
                </label>
                <label>
                    Código Postal: <input type="text" name="CodigoPostal" id="CodigoPostal" maxlength="6" placeholder="12345" pattern="((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}" required>
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Domicilio: <input type="text" name="Domicilio" id="Domicilio" maxlength="50" class="margenSexo">
                </label>
                <label>
                    Correo electrónico: <input type="email" name="CorreoElectronico" maxlength="50" id="CorreoElectronico" class="margenSexo" placeholder="aaaa@buscador.com" required>
                </label>
                <label>
                    Correo electrónico del tutor legal: <input type="email" name="CorreoPadre"  maxlength="50" id="CorreoPadre" placeholder="aaaa@buscador.com">
                </label>
                
                  <label for="pass" class="pass">Password:
                <input type="password" name="pass" id="pass" placeholder="Mínimo 8 caracteres" maxlength="50" oninput="inputContraseña()" required/> <span id="TextosPass"></span>
                </label>
                
                <label for="confirmpass">Confirmar Password: 
				<input type="password" name="confirmpass" id="confirmpass" placeholder="Confirmación de contraseña" maxlength="50" oninput="inputCoincidenContraseñas()" required/> <span id="textoConfirm"></span>
                </label>
                
            </section>
            <section>
                <label>
                    Fecha de llegada: <input type="date" name="FechaLlegada" id="FechaLlegada" class="margenGeneral" required>
                </label>
            </section>
            <section>
                <label>
                    Fecha de salida: <input type="date" name="FechaSalida" id="FechaSalida" class="margenGeneral" oninput="inputFechas()" required> <span id="textoFecha"></span>
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Tipo de pago:
                    <input value="mensual" name="TipoPago" id="TipoPago" type="radio" required>Mensual
                    <input value="bimensual" name="TipoPago" id="TipoPago" type="radio">Bimensual
                    <input value="cuatrimestral" name="TipoPago" id="TipoPago" type="radio">Cuatrimestral
                    <input value="anual" name="TipoPago" id="TipoPago" type="radio">Anual
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Forma de pago:
                    <input name="FormaPago" id="FormaPago" type="radio" value="efectivo" required>Efectivo
                    <input name="FormaPago" id="FormaPago" type="radio" value="transferencia">Transferencia
                    <input name="FormaPago" id="FormaPago" type="radio" value="recibo bancario">Recibo bancario
                    <input name="FormaPago" id="FormaPago" type="radio" value="TPV">TPV
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Va a pagar el comedor?: <input type="checkbox" id="pagoComedor" name="pagoComedor">
                </label>
            </section>
        </fieldset>
        <div><input type="submit" value="Enviar"> </div>
    </form>
	<?php 
	include "php/pie.php";
	 ?>
</body>

</html>
