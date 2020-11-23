-- Autor.- Susana Fabián Antón
-- Fecha creación.- 13/11/2020
-- Última modificación.- 13/11/2020

-- borramos todos los datos de la tabla 'Departamento'
DELETE FROM Departamento;

-- insertamos datos en la tabla 'Departamento'
INSERT INTO Departamento(CodDepartamento,DescDepartamento,FechaBaja,VolumenNegocio) VALUES
('INF','Departamento de informatica',null,1),
('VEN','Departamento de ventas',null,2),
('CON','Departamento de contabilidad',null,3),
('COC','Departamento de cocina',null,4),
('MEC','Departamento de mecanica',null,5),
('MAT','Departamento de matematicas',null,6);
