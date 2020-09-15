-- 18.- Listar los clientes que han hecho algún encargo del coche "Mercedes Ranchera"

SELECT en.id, en.cantidad, en.fecha FROM encargos en INNER JOIN coches co ON co.id = coche_id INNER JOIN clientes cl ON cl.id = cliente_id WHERE co.modelo LIKE "Mercedes Ranchera"; 

SELECT * FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE coche_id IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));