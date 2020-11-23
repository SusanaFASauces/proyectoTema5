<?php
    /**
    * @author Susana Fabián Antón
    * @since 10/11/2020
    * @version 10/11/2020
    */
    //variables que contienen información de nuestra base de datos y el nombre del archivo de copia de seguridad
    $mysqlDatabaseName ='db771560853';
    $mysqlUserName ='dbo771560853';
    $mysqlPassword ='Covid1234$';
    $mysqlHostName ='db771560853.hosting-data.io';
    $mysqlImportFilename ='crearTablas.sql';

    //importamos la base de datos y salida del status
    $command='mysql -h'.$mysqlHostName .' -u'.$mysqlUserName.' --password="'.$mysqlPassword.'" '.$mysqlDatabaseName.' < '.$mysqlImportFilename;
    exec($command,$output=array(),$worked);
    switch($worked){
        case 0:
            echo 'Los datos del archivo <b>'.$mysqlImportFilename.'</b> se han importado correctamente a la base de datos <b>'.$mysqlDatabaseName.'</b>';
            break;
        case 1:
            echo 'Se ha producido un error durante la importación. Por favor, compruebe si el archivo está en la misma carpeta que este script. Compruebe también los siguientes datos de nuevo: <br/><br/><table><tr><td>Nombre de la base de datos MySQL:</td><td><b>'.$mysqlDatabaseName.'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>'.$mysqlUserName.'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>'.$mysqlHostName.'</b></td></tr><tr><td>Nombre de archivo de la importación de MySQL:</td><td><b>'.$mysqlImportFilename.'</b></td></tr></table>';
            break;
    }
?>