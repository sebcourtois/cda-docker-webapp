<?php
$pdo = new PDO(
    "mysql:host=db;dbname=tasks_db;charset=utf8mb4",
    "userdocker",
    "userdocker",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
