<?php
var_dump($_POST);

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

$conn = new PDO("mysql:host=localhost;dbname=dwwm_2020;charset=utf8mb4", "root", "", []);

$sql = "INSERT INTO etudiant(nom,prenom) VALUES (:nom, :prenom)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);

$stmt->execute();
