-- 17.- Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia'

SELECT * FROM encargos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = "Frutería Antonia"); --Yo solo

SELECT e.id AS 'Número encargo', cantidad, c.nombre, co.modelo, e.fecha FROM encargos e INNER JOIN clientes c ON c.id = cliente_id INNER JOIN coches co ON co.id = e.coche_id WHERE e.cliente_id IN (SELECT id FROM clientes WHERE nombre = "Frutería Antonia"); -- Profesor - Solución --