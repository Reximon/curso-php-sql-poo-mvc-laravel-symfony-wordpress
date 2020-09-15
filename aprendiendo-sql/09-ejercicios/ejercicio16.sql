-- 16.- Obtener listado de clientes atendidos por el vendedor 'David López'

SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');

-- Hecho solo :)))))))