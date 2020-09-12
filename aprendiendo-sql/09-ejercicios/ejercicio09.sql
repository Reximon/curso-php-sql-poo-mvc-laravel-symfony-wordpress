-- 9.- Mostrar todos los vendedores del grupo numero 2, ordenados por salario de mayor a menor

SELECT * FROM vendedores WHERE grupo_id = 2 GROUP BY sueldo DESC;

-- Hecho Solo :)))