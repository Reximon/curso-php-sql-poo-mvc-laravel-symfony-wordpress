-- INSERTAR NUEVOS REGISTROS
insert into usuarios VALUES(null, 'Cristian', 'Cornielle', 'cristian@cristian.com', '12345', '2020-09-03');

insert into usuarios VALUES(null, 'Antonio', 'Martinez', 'antonio@antonio.com', '12345', '2020-07-05');

insert into usuarios VALUES(null, 'Víctor', 'Robles', 'victor@victor.com', '12345', '2021-09-03');

-- INSERTAR FILAS SOLO CON CIERTAS COLUMNAS

INSERT INTO usuarios(email,password) VALUES('admin@admin.com', 'admin');