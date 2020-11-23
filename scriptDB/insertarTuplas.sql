-- Autor.- Susana Fabián Antón
-- Fecha creación.- 23/11/2020
-- Última modificación.- 23/11/2020

-- insertamos datos en la tabla Departamento
INSERT INTO Departamento(CodDepartamento,DescDepartamento,FechaBaja,VolumenNegocio) VALUES
('INF','Departamento de informatica',null,1),
('VEN','Departamento de ventas',null,2),
('CON','Departamento de contabilidad',null,3),
('COC','Departamento de cocina',null,4),
('MEC','Departamento de mecanica',null,5),
('MAT','Departamento de matematicas',null,6);

-- insertamos tuplas en la tabla Usuario
INSERT INTO Usuarios(CodUsuario,DescUsuario,Password,Perfil,NumConexiones,FechaHoraUltimaConexion,ImagenUsuario) VALUES
('DAW208','Susana Fabián','encriptado','administrador',null,null,null);