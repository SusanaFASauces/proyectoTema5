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
            <h2>Ejercicio 02</h2>
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
                         * @since 25/11/2020
                         * @version 26/11/2020
                         */
                        require_once '../config/confDBPDO.php'; //fichero que contiene las constantes de configuración de una base de datos en PDO

                        if(!isset($_SERVER['PHP_AUTH_USER'])) { //si el usuario no se ha autenticado
                            header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                            header('HTTP/1.0 401 Unauthorized');
                            echo "<p style=color:red>Acceso no autorizado</p>";
                        }
                        else { //si el usuario se ha autenticado
                            try {
                                $miDB = new PDO(DSN, USER, PASSWORD); //instanciamos un objeto de la clase PDO para conectarnos a la base de datos
                                $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //establecemos que cuando se produzca un error en el atributo ERRMODE se lanzará una excepción
                                
                                $select = $miDB->query( //objeto de la clase PDOStatement que contiene una consulta que le hacemos a la base de datos
                                    "SELECT CodUsuario FROM Usuario " 
                                    . "WHERE CodUsuario='$_SERVER[PHP_AUTH_USER]' AND "
                                    . "Password=SHA2('$_SERVER[PHP_AUTH_USER]$_SERVER[PHP_AUTH_PW]',256)"
                                );
                                
                                if($select->rowCount()==0) { //si no se ha encontrado ningún usuario -> ¿SOBRA ESTE BLOQUE DE CÓDIGO?
                                    header('WWW-Authenticate: Basic realm="Contenido restringido"');
                                    header("HTTP/1.0 401 Unauthorized");
                                    echo "<p style=color:red>Acceso no autorizado</p>";
                                }
                                else { //si el usuario se ha autenticado correctamente
                                    echo "<p><strong>Nombre de usuario:</strong> ".$_SERVER['PHP_AUTH_USER']."<br>";
                                    echo "<strong>Contraseña:</strong> ".$_SERVER['PHP_AUTH_PW']."</p>";
                                    echo "<p style=color:green>Usuario autenticado correctamente</p>";
                                    ?>
                                    <div class="boton"><a href=ejercicio00.php>Ver detalles</a></div>
                                    <?php
                                }
                            }
                            catch(PDOException $ex) { //código a ejecutar cuando se produce un error 
                                echo "<p style='color:red;'>No se ha podido establecer la conexión</p>";
                                echo "<p style=color:red>Error: ".$ex->getMessage()."<br>"; //muestro el mensaje de error
                                echo "Código de error: ".$ex->getCode()."</p>"; //muestro el código del error
                            }
                            finally {
                                unset($miDB); //cerramos la conexion
                            }
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