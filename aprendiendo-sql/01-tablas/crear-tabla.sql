/*
TIPOS DE DATOS:
    int(nº de cifras) ENTERO
    integer(nº de cifras) ENTERO (máximo 4294967295)
    varchar(nº de caracteres) STRING / ALFANÚMERICO
    char(nº de caracteres) STRING / ALFANÚMERICO
    float(nº de caracteres, nº decimales) DECIMAL / COMA FLOTANTE
    date, time, timestamp

    -- String más grandes
    TEXT       65.535 caracteres
    MEDIUMTEXT 16.000.000 caracteres
    LONGTEXT 4.000.000.000 de caracteres

    -- Enteros más grandes
    MEDIUMINT 
    BIGINT 
*/

/*
    CREAR TABLA
*/
CREATE TABLE usuarios(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) default 'Hola qué tal',
    email       varchar(100) not null,
    password    varchar(255), 
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

