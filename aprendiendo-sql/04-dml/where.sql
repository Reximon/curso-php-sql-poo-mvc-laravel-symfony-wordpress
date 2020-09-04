-- Consulta con una condición --

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
Operador de comparación
    El Igual            =
    Distinto            !=
    Identico            ==
    Menor               <
    Mayor               >
    Menor o igual       <=
    Mayor o igual       >=
    Entre               between A and B
    En                  in
    Es nulo             is null
    No nulo             is not null
    Como                like
    No es como          not like
*/

/*
OPERADORES LÓGICOS:
    O       OR
    Y       AND
    NO      NOT
*/

/*
Comodín
Cualquier cantidad de carácteres  %
Un caracter desconocido           _
*/

-- Ejemplos de como Utilizarlos

-- 1. Mostrar nombre y apellidos de todos lo usuarios registrados en 2020

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2020;

-- 2. Mostrar nombres y apellidos de todos los usuarios NO registrados en 2020
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(FECHA);

-- 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A
--    Y que su contraseña sea 12345

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '12345';

-- 4. Sacar todos los registros de la tabla usuarios cuyo año sea PAR

SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

-- 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras
-- y se hayan registrado antes de 2021, y mostrar el nombre en mayúsculas

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2021;
