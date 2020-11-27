<!DOCTYPE html>
<html>
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 01</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Desarrollo de un control de acceso con identificación del usuario basado en la función header()</h3>
                </header>
                <article>
                    <?php
                        /**
                         * @author Susana Fabián Antón
                         * @since 24/11/2020
                         * @version 26/11/2020
                         */
                        
                        if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso') { //si el usuario no se ha autenticado correctamente
                            header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                            header('HTTP/1.0 401 Unauthorized');
                            echo "<p style=color:red>Acceso no autorizado</p>";
                        }
                        else { //si el usuario se ha autenticado correctamente
                            echo "<p style=color:green>Usuario autenticado correctamente</p>";
                            echo "<p><strong>Nombre de usuario:</strong> ".$_SERVER['PHP_AUTH_USER']."<br>";
                            echo "<strong>Contraseña:</strong> ".$_SERVER['PHP_AUTH_PW']."</p>";
                            ?>
                                <div class="boton"><a href=ejercicio00.php>Ver detalles</a></div>
                            <?php
                        }
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <div class="iconos-izq">
                <a href="../indexProyectoTema5.html"><img src="../webroot/icons/volver.png" alt="volver"></a>
            </div>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 26 de Noviembre 2020 -</p>
            <div class="iconos-dcha">
                <a href="https://github.com/SusanaFASauces" target="_blank"><img src="../webroot/icons/github.png" alt="github"></a>
            </div>
        </footer>
    </body>
</html>
<?php
    
?>

