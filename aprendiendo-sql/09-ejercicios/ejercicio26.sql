-- 26.- Sacar los vendedores que tienen jefe y sacar el nombre del jefe 

SELECT nombre, apellidos from vendedores WHERE jefe is not null; --Mi solución bacanera

SELECT concat(v1.nombre, ' ', v1.apellidos) AS 'Vendedor', concat(e2.nombre, ' ', e2.apellidos) AS 'Jefe' from vendedores v1 
INNER JOIN vendedores e2 ON v1.jefe = e2.id; -- El profe