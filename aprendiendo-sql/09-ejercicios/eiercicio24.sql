-- 24.- Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la cuidad, pero únicamente sean de Barcelona

SELECT e.*, cl.nombre FROM encargos e, clientes cl WHERE cl.ciudad LIKE "%Barcelona%";

SELECT e.id, co.modelo, cl.nombre, cl.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id 
INNER JOIN clientes cl ON cl.id = e.cliente_id 
WHERE cl.ciudad LIKE "%Barcelona%";