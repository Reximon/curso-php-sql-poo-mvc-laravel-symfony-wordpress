-- 5.- Mostrar todos los vendedores con su nombre y el número de días que llevan en el concesionario

SELECT nombre AS 'Vendedor', DATEDIFF(curdate(), fecha) AS 'Días' FROM vendedores;