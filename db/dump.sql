SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;
CREATE DATABASE IF NOT EXISTS tasks_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
USE tasks_db;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    completed BOOLEAN DEFAULT FALSE
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO tasks (title, completed) VALUES
('Apprendre Docker', false),
('Créer une API en PHP', true);
