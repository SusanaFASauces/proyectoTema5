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
                    <table class="margin">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                /**
                                 * @author Susana Fabián Antón
                                 * @since 23/11/2020
                                 * @version 23/11/2020
                                 */
                                foreach ($GLOBALS as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <h5>$_SERVER</h5>
                    <table class="margin">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                foreach ($_SERVER as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <h5>$_GET</h5>
                    <table class="margin">
                        <tbody>
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
                        </tbody>
                    </table>
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
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 23 de Noviembre 2020 -</p>
        </footer>
    </body>
</html>

