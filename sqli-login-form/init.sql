
CREATE DATABASE IF NOT EXISTS test;

USE test;

CREATE TABLE IF NOT EXISTS utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL
);

INSERT INTO utenti (username, password, nome, cognome) VALUES
('admin', 'adminpassword', 'Admin', 'User'),
('student', 'studentpassword', 'Student', 'User');