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
            <h2>Scripts</h2>
        </header>
        <main>
            <section>
                <header> 
                    <h3>Scripts de creación, carga inicial y borrado de la base de datos de 1&1</h3>
                </header>
                <article>
                    <header>
                        <h4>Muestra código crearTablas</h4>
                    </header>
                    <?php
                        /**
                         * @author Susana Fabián Antón
                         * @since 23/11/2020
                         * @version 23/11/2020
                         */
                        echo "<h5>crearTablas.sql</h5>"; 
                        highlight_file("../scriptDB/crearTablas.sql");
                        echo "<h5>crearTablas.php</h5>"; 
                        highlight_file("../scriptDB/crearTablas.php");
                    ?>
                </article>
                <article>
                    <header>
                        <h4>Muestra código insertarTuplas</h4>
                    </header>
                    <?php
                        echo "<h5>insertarTuplas.sql</h5>"; 
                        highlight_file("../scriptDB/insertarTuplas.sql");
                        echo "<h5>insertarTuplas.php</h5>"; 
                        highlight_file("../scriptDB/insertarTuplas.php");
                    ?>
                </article>
                <article>
                    <header>
                        <h4>Muestra código borrarTablas</h4>
                    </header>
                    <?php
                        echo "<h5>borrarTablas.sql</h5>"; 
                        highlight_file("../scriptDB/borrarTablas.sql");
                        echo "<h5>borrarTablas.php</h5>"; 
                        highlight_file("../scriptDB/borrarTablas.php");
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <div class="iconos-izq">
                <a href="../indexProyectoTema5.html"><img src="../webroot/icons/volver.png" alt="volver"></a>
            </div>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 23 de Noviembre 2020 -</p>
            <div class="iconos-dcha">
                <a href="https://github.com/SusanaFASauces" target="_blank"><img src="../webroot/icons/github.png" alt="github"></a>
            </div>
        </footer>
    </body>
</html>