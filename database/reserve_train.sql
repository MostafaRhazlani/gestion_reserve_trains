DROP TABLE IF EXISTS `users`; 
CREATE TABLE users(
	iduser int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username varchar(255),
    email varchar(255),
    fullname varchar(255),
    role boolean,
    password varchar(255)
);

DROP TABLE IF EXISTS `train`;
CREATE TABLE train(
	id_train int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name_train varchar(255),
    photo varchar(255),
    capacity int
);

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE voyage(
	id_voyage int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    departure_s varchar(255),
    arrival_s varchar(255),
    description TEXT,
    date_departure TIMESTAMP,
    date_arrival TIMESTAMP NULL DEFAULT NULL,
    prix int;
    id_train int,
    FOREIGN KEY (id_train) REFERENCES train(id_train) ON DELETE CASCADE
);

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE reserve(
	id_reserve int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    iduser int,
    id_voyage int,
    num_passages int,
    FOREIGN KEY (iduser) REFERENCES users(iduser) ON DELETE CASCADE,
    FOREIGN KEY (id_voyage) REFERENCES voyage(id_voyage) ON DELETE CASCADE
);


DROP TABLE IF EXISTS `passages`;
CREATE TABLE passages(
	id_passage int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    fullname_passage varchar(255),
    CIN varchar(255),
    phone int,
    id_reserve int,
    FOREIGN KEY (id_reserve) REFERENCES reserve(id_reserve) ON DELETE CASCADE

);

INSERT INTO users(username, email, fullname, role, password) VALUES
('mostafa', 'admin@gmail.com', 'mostafa rhazlani', 1, md5('123')),
('othmane', 'user1@gmail.com', 'othmane ghazlani', 0, md5('123')),
('mostafa', 'user2@gmail.com', 'azdin romani', 0, md5('123')),
('simo', 'user3@gmail.com', 'simo 6', 0, md5('123'));

INSERT INTO train(name_train, photo, capacity) VALUES
('ASFAR YASSIN', 'images.png', 30),
('STYM', '20191212_234816.jpg', 50),
('SHQORY', '2020.jpg', 40);

INSERT INTO voyage(departure_s, arrival_s, description, date_departure, date_arrival, id_train) VALUES
('safi', 'casablanca', 'text', '2023-03-28 14:30:00', '2023-03-28 14:30:00', 1),
('rabat', 'tanger', 'text', '2023-04-1 20:00:00', '2023-04-1 21:00:00', 2),
('jadida', 'safi', 'text', '2023-03-28 14:30:00', '2023-03-28 14:30:00', 3);

INSERT INTO reserve(iduser, id_voyage, num_passages) VALUES
(2, 1, 3),
(3, 2, 2),
(4, 2, 1);

INSERT INTO passages(fullname_passage, CIN, phone, id_reserve) VALUES
('mohammed salhi', 'HH11111', 0620304050, 1),
('souhail koram', 'HH00000', 0621314151, 1),
('nassim koloni', 'HH22222', 0622334455, 2);