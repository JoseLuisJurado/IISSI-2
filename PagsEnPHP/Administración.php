<!DOCTYPE html>
<html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/css404.css" />
    <link rel="icon" type="image/jpeg" href="imagenes/LogoRED.jpeg" />
</head>

<body class="background">

    <div>
        <a href="pagina_base.html" target="_blank">
            <img src="imagenes/LogoRED.jpeg" alt="Logo" class="ImgUS"></a>
        <img src="imagenes/panoramica1.jpg" id="panoramica" width="1180" height="140">

    </div>
    <h2 class="texto-chulo">
        Residencia Estudiantil Digital
    </h2>
    <div class="sticky">
        <!-- start nav -->
        <nav id="menu">
            <!-- start menu -->
            <ul>
                <li><a href="formulario-reserva.html">Reserva</a></li>
                <li><a href="#">Administación</a></li>
                <li><a href="Como-llegar.html">Como Llegar</a></li>
                <li><a href="Residencia.html">Residencia</a>
                    <!-- start menu desplegable -->
                    <ul>
                        <li><a href="Instalaciones.html">Instalaciones</a></li>
                        <li><a href="Conocenos.html">Conócenos</a></li>
                        <li><a href="Contacto.html">Contacto</a></li>
                        <li><a href="Servicios.html">Servicios</a></li>
                    </ul>
                    <!-- end menu desplegable -->
            </ul>
            </li>
            <!-- end menu -->
        </nav>
        <!-- end nav -->
    </div>
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

</html>