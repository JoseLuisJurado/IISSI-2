<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <link rel="stylesheet" href="css/cssContacto.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
</head>

<body>
    <?php
    include "php/menu.php";
    ?>

    <fieldset>
        <div class="margenFormulario">

            <h2 style="text-decoration: underline;">
                Contacto
            </h2>
            <div class="texto">
                Residencia estudiantil Bahia
            </div>

            <div class="texto">
                C/S.Alejandro, 179, 11510, Puerto Real, Cádiz
            </div>

            <div class="texto">
                954-789-856-1
            </div>

            <div class="texto">
                CorreoFalso@gmaol.ez
            </div>

            <h2 style="text-decoration: underline;">
                Consulta
            </h2>

            <form method="GET">
                <section>
                    Nombre*: <input type="text" name="FirstName" class="margenGeneral" required>
                </section>
                <section>
                    Primer Apellido*: <input type="text" name="Primer Apellido" class="margenGeneral" required>
                </section>
                <section>
                    Segundo Apellido: <input type="text" name="Segundo Apellido" class="margenGeneral" required>
                </section>

                <section class="margenGeneral">


                    Correo electrónico*: <input type="email" name="Correo electrónico" class="margenSexo" required>


                </section>

                <section class="margenGeneral">
                    <section>
                        Asunto*: <input type="text" name="Asunto" maxlength="100" class="margenGeneral" required>
                    </section>
                    <section style="margin-top: 1%; margin-bottom: 1%   ">
                        Mensaje*:
                    </section>
                    <textarea name="Mensaje" rows=10 cols=140 maxlength="600">
                            </textarea>
            </form>




            </section>

            <input type="submit" title="Enviar">
            </form>
        </div>
    </fieldset>
    <?php
    include "php/pie.php";
    ?>
</body>

</html>