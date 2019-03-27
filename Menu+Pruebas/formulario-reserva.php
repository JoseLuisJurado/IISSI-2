<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <link rel="stylesheet" href="css/formulario-reserva.css" />
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
    <p><i>Los campos obligatorios están marcados con *</i></p>

    <fieldset>
        <legend>Datos Personales</legend>
        <section>
            <label>
                DNI: <input type="text" name="DNI" id="DNI" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" placeholder="12345678A" maxlength="9">
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
                Sexo: <select class="margenSexo">
                    <option value="">Sexo</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
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
                        $selected = ($p == $default_paises) ? "selected" : "";
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
                Fecha de llegada: <input type="datetime" name="FechaLLegada" class="margenGeneral" required>
            </label>
        </section>
        <section>
            <label>
                Fecha de salida: <input type="datetime" name="FechaSalida" class="margenGeneral" required>
            </label>
        </section>
        <section class="margenGeneral">
            <label>
                Tipo de pago:
                <select class="margenSexo" required>
                    <option value="Mensual">Mensual</option>
                    <option value="Bimensual">Bimensual</option>
                    <option value="Cuatrimestral">Cuatrimestral</option>
                    <option value="Anual">Anual</option>
                </select>
            </label>
            <label>
                Forma de pago:
                <select required>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Recibo bancario">Recibo bancario</option>
                </select>
            </label>
        </section>
    </fieldset>
    <input type="submit" title="Enviar">
</body>

</html> 