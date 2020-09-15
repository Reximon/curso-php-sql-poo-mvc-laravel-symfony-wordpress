-- 27.- Visualizar los nombres de los clientes y la cantidad de encargos realizados incluyendo los que no hayan realizado encargos.

SELECT cl.nombre, en.cantidad FROM clientes cl 
LEFT JOIN encargos en ON en.cliente_id = cl.id; --Hecho por mi mismo, menos el LEFT JOIN

SELECT cl.nombre, count(e.id) FROM clientes cl 
LEFT JOIN encargos en ON en.cliente_id = cl.id GROUP BY 1;



INSERT INTO clientes VALUES(null, 5, 'Tienda Organica S.A', 'Murcia', 0, CURDATE());