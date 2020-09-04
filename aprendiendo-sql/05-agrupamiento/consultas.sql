-- Consultas de agrupamiento --

SELECT count(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- Consulta de agrupamiento con condiciones

SELECT count(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING count(titulo) >= 4;

/*
    AVG Sacar la media
    COUNT Contar el número de elementos
    MAX Valor máximo del grupo
    MIN Valor mínimo del grupo
    SUM Sumar todo el contenido del grupo
*/
SELECT AVG(id) AS 'Media de de entradas' FROM entradas;

SELECT MAX(id) AS 'Usuario con el ID más grande', titulo FROM entradas;

SELECT MIN(id) AS 'Usuario con el ID más grande', titulo FROM entradas;

SELECT SUM(id) AS 'Suma de ID', titulo FROM entradas;


