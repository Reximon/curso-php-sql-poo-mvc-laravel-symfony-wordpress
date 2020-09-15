-- 22.- Mostrar listado de clientes (numero de cliente y el nombre), mostrar también el número de vendedor y su nombre.

SELECT cl.id, cl.nombre, v.nombre, v.id from clientes cl, vendedores v WHERE cl.vendedor_id = v.id;

SELECT cl.id, cl.nombre, v.id, CONCAT(v.nombre,' ', v.apellidos) FROM clientes cl, vendedores v WHERE cl.vendedor_id = v.id;