-- 28.- Mostrar todos los vendedores y el numero de clientes. Se deben mostrar tengan o no clientes 

SELECT ve.nombre AS 'Vendedor', cl.nombre AS 'Comprador', COUNT(cl.id) AS 'CANTIDAD' FROM vendedores ve LEFT JOIN clientes cl ON cl.vendedor_id = ve.id GROUP BY 1; --Yo

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id GROUP BY v.id; --Profesor
