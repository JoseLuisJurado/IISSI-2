<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="Antonio Miguel González Villar">
    <link rel="stylesheet" href="css/Servicios.css" />
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
    <?php
    include "php/menu.php";
    ?>
    <div class="cuerpo2">
    <div class="cuerpo3">
    <div class="margen">
        <h2 class="titulo">
            Servicios
        </h2>
        <h2 class="titulo2">
            Comedor
        </h2>
        <img class="centro"  src="imagenes/gfoto45.jpg" border="2" width="300" height="200" />
        <p>
            El servicio de comedor, puede ser pedido de forma opcional, con un coste adicional.
            Incluye Almuerzo completo. Este servicio estará disponible cuando un mínimo de 30 residentes lo hayan
            solicitado en el contrato.
        </p>
        <h2 class="titulo2">
            Mantenimiento
        </h2>
        <img class="centro" style="margin-top:10px; " src="imagenes/100D7VIZ003_1.jpg" border="2" width="300" height="200" />

        <p>
            Esta residencia consta con un eficiente servicio de mantenimiento que se encargará de la
            reparación de cualquier desperfecto en la misma. En caso de que el desperfecto sea causado por un
            residente, este pagará los gastos pertinentes.
        </p>

        <h2 class="titulo2">
            Vigilancia
        </h2>
        <img class="centro" style="margin-top:10px; " src="imagenes/Chuck Norris.jpg" border="2" width="300" height="200" />

        <p>
			El servicio de vigilancia, es el encargado de evitar que personas no autorizadas entren
            en la residencia, así como de defender la misma de cualquier peligro externo, como ladrones o ETA.
        </p>

        <h2 class="titulo2">
            Limpieza
        </h2>
        <img class="centro" style="margin-top:10px; " src="imagenes/depositphotos_98500248-stock-photo-worker-in-protective-chemical-suit.jpg" border="2" width="300" height="200" />

        <p>
         	El contrato de la residencia incluye nuestro servicio de limpieza. Los residentes
            podrán disponer de limpieza en sus habitaciones todos los viernes. Además de ser el encargado de la limpieza
            post-estancia.
        </p>



    </div>
    </div>
    </div>
    <?php
    include "php/pie.php";
    ?>
</body>

</html>
