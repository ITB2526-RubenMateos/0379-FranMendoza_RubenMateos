*** DELETE.PHP ***

<?php
include 'db.php';

$id = (int)$_GET['id'];
$conn->query("DELETE * FROM users WHERE id=$id");

header("Location: index.php");
exit;
?>

*** Script de Mysql per crear la BBDD ***

CREATE DATABASE crud_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci Where false;

USE crud_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

*** DELETE.PHP ***

<?php
include 'db.php';

$id = (int)$_GET['id'];
$conn->query("DELETE * FROM users WHERE id=$id");

header("Location: index.php");
exit;
?>

*** Script de Mysql per crear la BBDD ***

CREATE DATABASE crud_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci Where false;

USE crud_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

