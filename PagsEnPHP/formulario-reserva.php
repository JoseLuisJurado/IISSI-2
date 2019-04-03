<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <meta name="autor2" content="José Luis Jurado Ortiz">
    <link rel="stylesheet" href="css/formulario-reserva.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <script src="javascript/validacionFormulario.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
</head>

<body class="background">
    <div>
        <?php
        include "php/menu.php";
        ?>
        <?php
        include "php/funciones.php";
        ?>

    </div>

    <form name="formularioReserva" method="post" onsubmit="return validacionFormulario()">
        <fieldset>
            <legend>Datos Personales</legend>
            <section>
                <label>
                    DNI: <input type="text" name="DNI" id="DNI" placeholder="12345678A" maxlength="9" required>
                </label>
            </section>
            <section>
                <label>
                    Nombre: <input type="text" name="FirstName" class="margenGeneral" required>
                </label>
            </section>
            <section>
                <label>
                    Primer Apellido: <input type="text" name="Primer Apellido" class="margenGeneral" required>
                </label>
            </section>
            <section>
                <label>
                    Segundo Apellido: <input type="text" name="Segundo Apellido" class="margenGeneral" required>
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Sexo:
                        <input value="hombre" name="Sexo" type="radio">Hombre
                        <input value="mujer" name="Sexo" type="radio">Mujer
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Eres mayor de edad?: <input type="checkbox" name="MayoriaEdad" style="text-align: left" required>
                </label>
            </section>
        </fieldset>
        <fieldset class="margenGeneral">
            <legend>Otros Datos de Importancia</legend>
            <section>
                <label for="paises"> País:
                    <select name="pais" id="paises">
                        <?php
                        $selected = "";
                        foreach ($paises as $p => $paises) {
                            $selected = ($p == $default_paises) ?"selected" : "";
                            echo "<option $selected value='$p'>$paises</option>";
                        }
                        ?>
                    </select>
                </label>
                <label>
                    Población: <input type="text" name="Población" class="margenSexo" placeholder="Sevilla">
                </label>
                <label>
                    Código Postal: <input type="text" name="CódigoPostal" placeholder="12345" pattern="((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}">
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Domicilio: <input type="text" name="Domicilio" class="margenSexo" required>
                </label>
                <label>
                    Correo electrónico: <input type="text" name="Correo electrónico" class="margenSexo" pattern="[a-ze-9._$+-1+@[a-ze-9.-]+\-[a-z]{2,}" placeholder="aaaa@buscador.com" required>
                </label>
                <label>
                    Correo electrónico Padre: <input type="text" name="CorreoPadre" pattern="[a-ze-9._$+-1+@[a-ze-9.-]+\-[a-z]{2,}" placeholder="aaaa@buscador.com">
                </label>
            </section>
            <section>
                <label>
                    Fecha de llegada: <input type="datetime-local" name="FechaLLegada" class="margenGeneral" required>
                    <b style="text-transform: uppercase; margin-left: 2%"> Si no sabe la hora de llegada, marque 00:00</b>
                </label>
            </section>
            <section>
                <label>
                    Fecha de salida: <input type="datetime-local" name="FechaSalida" class="margenGeneral" required>
                    <b style="text-transform:uppercase; margin-left: 2%"> Si no sabe la hora de llegada, marque 23:59</b>
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Tipo de pago:
                    <input value="mensual" name="TipoPago" type="radio">Mensual
                    <input value="bimensual" name="TipoPago" type="radio">Bimensual
                    <input value="cuatrimestral" name="TipoPago" type="radio">Cuatrimestral
                    <input value="anual" name="TipoPago" type="radio">Anual
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Forma de pago:
                    <input name="FormaPago" type="radio" value="efectivo">Efectivo
                    <input name="FormaPago" type="radio" value="transferencia">Transferencia
                    <input name="FormaPago" type="radio" value="recibo bancario">Recibo bancario
                    <input name="FormaPago" type="radio" value="TPV">TPV
                </label>
            </section>
            <section class="margenGeneral">
                <label>
                    Va a pagar el comedor?: <input type="checkbox" name="pagoComedor" required>
                </label>
            </section>
        </fieldset>
        <div><input type="submit" value="Enviar"> </div>
    </form>
</body>

</html>