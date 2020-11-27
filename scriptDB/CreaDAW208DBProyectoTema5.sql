-- Autor.- Susana Fabián Antón
-- Fecha creación.- 23/11/2020
-- Última modificación.- 23/11/2020

-- creamos la base de datos
CREATE DATABASE IF NOT EXISTS DAW208DBProyectoTema5;

-- creamos el usuario administrador de la base de datos
CREATE USER IF NOT EXISTS 'usuarioDAW208DBProyectoTema5'@'%' IDENTIFIED BY 'P@ssw0rd';

-- utilizamos de la base de datos
USE DAW208DBProyectoTema5;

-- creamos las tablas que va a usar nuestra base de datos
CREATE TABLE IF NOT EXISTS Departamento (
    CodDepartamento VARCHAR(3) NOT NULL,
    DescDepartamento VARCHAR(255) NOT NULL,
    FechaBaja DATE NULL,
    VolumenNegocio FLOAT NOT NULL,
    PRIMARY KEY(CodDepartamento)
);

CREATE TABLE IF NOT EXISTS Usuario (
    CodUsuario VARCHAR(15) NOT NULL,
    DescUsuario VARCHAR(255) NOT NULL,
    Password VARCHAR(64) NOT NULL,
    Perfil ENUM('administrador', 'usuario') DEFAULT 'usuario',
    NumConexiones INT DEFAULT 0,
    FechaHoraUltimaConexion TIMESTAMP,
    ImagenUsuario MEDIUMBLOB,
    PRIMARY KEY(CodUsuario)
);

-- otorgamos permisos al usuario sobre las tablas de la base de datos
GRANT ALL PRIVILEGES ON DAW208DBProyectoTema5.* TO 'usuarioDAW208DBProyectoTema5'@'%';