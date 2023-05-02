CREATE DATABASE blogsite;

CREATE TABLE author (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE post (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    seo_title VARCHAR(255),
    content VARCHAR(255),
    author INT,
    date TIMESTAMP CURRENT_TIMESTAMP
);

CREATE TABLE category (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    seo_title VARCHAR(255)
);

CREATE TABLE has_category (
    post INT,
    category INT
);

INSERT INTO category (name, seo_title) 
    VALUES ('Microsoft', 'microsoft');

