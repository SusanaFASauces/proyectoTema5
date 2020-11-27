-- Autor.- Susana Fabián Antón
-- Fecha creación.- 23/11/2020
-- Última modificación.- 23/11/2020

-- utilizamos de la base de datos
USE DAW208DBProyectoTema5;

-- insertamos datos en la tablas de nuestra base de datos
INSERT INTO Departamento(CodDepartamento,DescDepartamento,FechaBaja,VolumenNegocio) VALUES
('INF','Departamento de informatica',null,1),
('VEN','Departamento de ventas',null,2),
('CON','Departamento de contabilidad',null,3),
('COC','Departamento de cocina',null,4),
('MEC','Departamento de mecanica',null,5),
('MAT','Departamento de matematicas',null,6);

INSERT INTO Usuario(CodUsuario, DescUsuario, Password) VALUES
    ('nereaA','NereaA',SHA2('nereaApaso',256)),
    ('miguel','Miguel',SHA2('miguelpaso',256)),
    ('bea','Bea',SHA2('beapaso',256)),
    ('nereaN','NereaN',SHA2('nereaNpaso',256)),
    ('cristinaM','CristinaM',SHA2('cristinaMpaso',256)),
    ('susana','Susana',SHA2('susanapaso',256)),
    ('sonia','Sonia',SHA2('soniapaso',256)),
    ('elena','Elena',SHA2('elenapaso',256)),
    ('nacho','Nacho',SHA2('nachopaso',256)),
    ('raul','Raul',SHA2('raulpaso',256)),
    ('luis','Luis',SHA2('luispaso',256)),
    ('arkaitz','Arkaitz',SHA2('arkaitzpaso',256)),
    ('rodrigo','Rodrigo',SHA2('rodrigopaso',256)),
    ('javier','Javier',SHA2('javierpaso',256)),
    ('cristinaN','CristinaN',SHA2('cristinaNpaso',256)),
    ('heraclio','Heraclio',SHA2('heracliopaso',256)),
    ('amor','Amor',SHA2('amorpaso',256)),
    ('antonio','Antonio',SHA2('antoniopaso',256)),
    ('leticia','Leticia',SHA2('leticiapaso',256));

-- insertamos el usuario con el rol administrador
INSERT INTO Usuario(CodUsuario, DescUsuario, Password, Perfil) VALUES ('admin','admin',SHA2('adminpaso',256), 'administrador');