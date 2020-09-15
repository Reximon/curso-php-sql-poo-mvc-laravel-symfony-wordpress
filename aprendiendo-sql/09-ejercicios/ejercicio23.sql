-- 23.- Listar todos los encargos realizados con la marca del coche y el nombre del cliente

SELECT e.cantidad, co.modelo, cl.nombre FROM encargos e, coches co, clientes cl GROUP BY e.cantidad_id = cl.id; --ASI LO HAGO YO

SELECT e.id, co.modelo, cl.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id INNER JOIN clientes cl ON cl.id = e.cliente_id; -- ASI EL PROFE