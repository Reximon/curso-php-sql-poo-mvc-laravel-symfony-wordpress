-- 2.- Modificar la comisión de los vendedores y ponerla al 2% cuando ganan más de 50k

UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;

-- Hecho solo :)))))))