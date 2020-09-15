-- 15.- Mostrar los clientes que más pedidos han hecho y mostrar cuantos hicieron

SELECT cl.nombre, COUNT(cl.id) FROM encargos e INNER JOIN clientes cl ON cl.id = e.cliente_id GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;