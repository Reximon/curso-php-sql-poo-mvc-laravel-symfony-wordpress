/*
Vistas:
    Las podemos definir como una consulta almacenada en la base de datos que se utiliza como una tabla virtual. 
    No almacena datos sino que utiliza asociaiones y los datos originales de las tablas de forma que siempre se mantiene actulizada.
*/
CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'  
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id = u.id 
INNER JOIN categorias c ON e.categoria_id = c.id;

DROP VIEW entradas_con_nombres;