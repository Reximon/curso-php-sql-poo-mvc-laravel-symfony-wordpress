CREATE DATABASE IF NOT EXISTS laravel_master;

USE laravel_master;

CREATE TABLE IF NOT EXISTS users(
    id              int(255) auto_increment not null,
    role            varchar(20),
    name            varchar(100),
    surname         varchar(200),
    nick            varchar(100),
    email           varchar(255),
    password        varchar(255),
    image           varchar(255),
    created_at      datetime,
    updated_at       datetime,
    remember_token  varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id) 
)ENGINE=InnoDB;

INSERT INTO users VALUES(NULL, 'user', 'Víctor', 'Robles', 'victorroblesweb', 'victor@victor.com', 'pass', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(NULL, 'user', 'Cristian', 'Cornielle', 'Reximon', 'cristian@cristian.com', 'pass', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES(NULL, 'user', 'Elon', 'Musk', 'elonmuskofi', 'elon@elon.com', 'pass', null, CURTIME(), CURTIME(), null);

CREATE TABLE IF NOT EXISTS images(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_path      varchar(255),
    description     text,
    created_at      datetime,
    updated_at       datetime,
    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT fk_images_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

INSERT INTO images VALUES(NULL, 1, 'text.jpg', 'descripcion de prueba 1', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL, 1, 'playa.jpg', 'descripcion de prueba 2', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL, 1, 'arena.jpg', 'descripcion de prueba 3', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL, 3, 'tesla.jpg', 'descripcion de prueba 4', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    content         text,
    created_at      datetime,
    updated_at       datetime,
    CONSTRAINT pk_comments PRIMARY KEY(id),
    CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDb;

INSERT INTO comments VALUES(null, 1, 5, ' Buena Foto del Tesla Manito', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 2, 3, ' Buena Foto de la Playa', CURTIME(), CURTIME());
INSERT INTO comments VALUES(null, 2, 4, 'A TOPE! A TOPE JEFE DE EQUIPO!', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    created_at      datetime,
    updated_at       datetime,
    CONSTRAINT pk_likes PRIMARY KEY(id),
    CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDb;

INSERT INTO likes VALUES(null, 1, 5, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 2, 4, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 3, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(null, 2, 5, CURTIME(), CURTIME());
