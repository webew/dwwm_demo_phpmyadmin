<?php
// Les données en provenance du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=dwwm_2020;charset=utf8mb4", "root", "", []);

// Requête SQL
$sql = "INSERT INTO etudiant(nom,prenom) VALUES (:nom, :prenom)";

// Envoi de la requête SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->execute();
