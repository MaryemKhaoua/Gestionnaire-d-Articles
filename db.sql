CREATE TABLE admins(
    id INT PRIMARY KEY AUTO INCREMENT,
    firstname VARCHAR(50),
    lastname  VARCHAR(50),
    username  VARCHAR(50),
    pasword   TEXT,
    cin TEXT,
    phone TEXT
);

CREATE TABLE users(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname  VARCHAR(50),
    username  VARCHAR(50),
    pasword   TEXT

);
CREATE TABLE acticles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre TEXT,
    contenu TEXT,
    date_ceation TEXT,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);
CREATE TABLE persons(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname  VARCHAR(50),
    username  VARCHAR(50),
    pasword   TEXT
);