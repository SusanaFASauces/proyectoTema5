-- Autor.- Susana Fabián Antón
-- Fecha creación.- 10/11/2020
-- Última modificación.- 10/11/2020

-- creamos la tabla Departamento
CREATE TABLE IF NOT EXISTS Departamento (
    CodDepartamento VARCHAR(3),
    DescDepartamento VARCHAR(255),
    FechaBaja DATE,
    VolumenNegocio FLOAT,
    PRIMARY KEY(CodDepartamento)
) ENGINE=InnoDB;

-- creamos la tabla Usuario
CREATE TABLE IF NOT EXISTS Usuario (
    CodUsuario VARCHAR(15) NOT NULL,
    DescUsuario VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NULL, -- completar con encriptación
    Perfil VARCHAR(255) NOT NULL, -- cambiar a enum "administrador|usuario"
    NumConexiones INT,
    FechaHoraUltimaConexion TIMESTAMP,
    ImagenUsuario VARCHAR(255), -- cambiar a mediumblob 
    PRIMARY KEY(CodUsuario)
) ENGINE=InnoDB;