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
            <h2>Ejercicio 00</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Mostrar el contenido de las variables superglobales y phpinfo()</h3>
                </header>
                <article>
                    <header>
                        <h4>Variables superglobales</h4>
                    </header>
                    <h5>$GLOBALS</h5>
                    <table class="tabla margin">
                        <tr>
                            <th>Variable</th>
                            <th>Valor</th>
                        </tr>
                        <?php
                            /**
                             * @author Susana Fabián Antón
                             * @since 23/11/2020
                             * @version 26/11/2020
                             */
                            foreach ($GLOBALS as $variable => $valor) {
                                echo "<tr>";
                                echo "<td>".$variable."</td>";
                                echo "<td>".$valor."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                    <?php  if(!empty($_SERVER)) { //si la variable superglobal está definida ?> 
                        <h5>$_SERVER</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_SERVER)) {
                                    foreach ($_SERVER as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_GET)) { //si la variable superglobal está definida ?> 
                        <h5>$_GET</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                foreach ($_GET as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_POST)) { //si la variable superglobal está definida ?> 
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_POST)) {
                                    foreach ($_POST as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_FILES)) { //si la variable superglobal está definida ?>
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_FILES)) {
                                    foreach ($_FILES as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_REQUEST)) { //si la variable superglobal está definida ?>
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_REQUEST)) {
                                    foreach ($_REQUEST as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_SESSION)) { //si la variable superglobal está definida ?>
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_SESSION)) {
                                    foreach ($_SESSION as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_ENV)) { //si la variable superglobal está definida ?>
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_ENV)) {
                                    foreach ($_ENV as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } if(!empty($_COOKIE)) { //si la variable superglobal está definida ?>
                        <h5>$_POST</h5>
                        <table class="tabla margin">
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                if(isset($_COOKIE)) {
                                    foreach ($_COOKIE as $variable => $valor) {
                                        echo "<tr>";
                                        echo "<td>".$variable."</td>";
                                        echo "<td>".$valor."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </table>
                    <?php } ?>
                </article>
                <article>
                    <header>
                        <h4>phpinfo()</h4>
                    </header>
                    <?php
                        phpinfo();
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