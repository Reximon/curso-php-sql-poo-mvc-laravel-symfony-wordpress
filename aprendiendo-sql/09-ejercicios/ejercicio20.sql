-- 20.- Selecionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo

SELECT * FROM grupos WHERE id IN (SELECT grupo_id from vendedores WHERE sueldo = (SELECT MAX(sueldo) FROM vendedores));