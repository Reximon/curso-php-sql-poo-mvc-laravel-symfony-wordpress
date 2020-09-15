-- 19.- Obtener los vendedores con 2 o más clientes.

SELECT * FROM clientes WHERE vendedor_id IN (SELECT id, CONCAT(nombre, ' ', apellidos) FROM vendedores);

SELECT * FROM vendedores WHERE id IN (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING count(id) >= 2);