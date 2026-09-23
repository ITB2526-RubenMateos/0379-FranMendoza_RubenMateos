*** DB.PHP ***

<?php
$servername = "locahost";
$username = "root";0
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
?>
AP Projecte ASIXc2Codi en PHP

*** Estructura del projecte i codi a desplegar ***
app/
 ├── db.php         (connexió a la BBDD)
 ├── index.php      (llista usuaris + formulari per afegir-ne)
 ├── add.php        (afegeix usuari)
 ├── delete.php     (elimina usuari)
 └── edit.php       (edita usuari)


*** DB.PHP ***

<?php
$servername = "locahost";
$username = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connecmt_error) {
    die("Connexió fallida: " . $conn->connect_error);
}
?>

*** Script de Mysql per crear la BBDD ***

CREATE DATABASE crud_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci Where false;

USE crud_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
