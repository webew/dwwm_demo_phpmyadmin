<?php

// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=dwwm_2020;charset=utf8mb4", "root", "", []);

// Requête SQL + envoi
$stmt = $conn->prepare("SELECT * FROM etudiant");
$stmt->execute();

// Récupération de tous les enregistrements sous forme de tableau associatif
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($etudiants);

// Récupération des enregistrements individuellement
// while ($etudiant = $stmt->fetch()) {
//     var_dump($etudiant["nom"]);
// }
