-- schema.sql
CREATE TABLE IF NOT EXISTS ejercicios (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre_archivo VARCHAR(100) NOT NULL UNIQUE,
    titulo VARCHAR(255) NOT NULL,
);


INSERT INTO ejercicios (nombre_archivo, titulo, orden) VALUES
('ejercicio4.php', 'Ejercicio 4', 4),
('ejercicio5.php', 'Ejercicio 5', 5),
('ejercicio6.php', 'Ejercicio 6', 6),
('ejercicio7.php', 'Ejercicio 7', 7),
('ejercicio8.php', 'Ejercicio 8', 8),
('ejercicio9.php', 'Ejercicio 9', 9),
('ejercicio10.php', 'Ejercicio 10', 10),
('ejercicio11.php', 'Ejercicio 11', 11),
('ejercicio12.php', 'Ejercicio 12', 12),
('ejercicio13.php', 'Ejercicio 13', 13),
('ejercicio14.php', 'Ejercicio 14', 14),
('ejercicio15.php', 'Ejercicio 15', 15),
('ejercicio16.php', 'Ejercicio 16', 16),
('ejercicio17.php', 'Ejercicio 17', 17),
('ejercicio18.php', 'Ejercicio 18', 18);
