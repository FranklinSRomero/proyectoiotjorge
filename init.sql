CREATE DATABASE IF NOT EXISTS monitor_gases;

USE monitor_gases;

CREATE TABLE IF NOT EXISTS lecturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    valor_gas DECIMAL(10,2) NOT NULL,
    fecha_hora DATETIME NOT NULL
);