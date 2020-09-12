-- 6.- Visualizar el nombre y los apellidos de los vendedores en una misma columna, su fecha de registro y que día de la semana que era cuando se registraron

SELECT CONCAT(nombre, ' ', apellidos) AS 'Vendedores', fecha, DAYNAME(fecha) FROM vendedores;

-- Hecho solo :))))))))))