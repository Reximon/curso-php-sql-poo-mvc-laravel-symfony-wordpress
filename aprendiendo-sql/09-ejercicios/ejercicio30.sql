-- 30.- Mostrar los datos del vendedor con más antiguerdad del concesionario

SELECT nombre, apellidos, fecha FROM vendedores ORDER BY 3 ASC LIMIT 1;

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

-- 30 + .- Obtener el coche con más unidades vendidas;

SELECT co.modelo, co.marca, en.cantidad FROM coches co INNER JOIN encargos en ON en.coche_id = co.id ORDER BY en.cantidad DESC LIMIT 1;

SELECT * from coches WHERE id IN (SELECT coche_id FROM encargos ORDER BY cantidad DESC LIMIT 3);

SELECT * from coches WHERE id IN (SELECT coche_id FROM encargos WHERE cantidad IN (SELECT MAX(cantidad) FROM encargos));