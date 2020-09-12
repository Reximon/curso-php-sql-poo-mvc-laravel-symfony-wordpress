-- 11. Visualizar todos los cargos y el número de los vendedores que hay en cada cargo 

SELECT cargo, count(id) FROM vendedores GROUP BY cargo ORDER BY count(id)DESC;