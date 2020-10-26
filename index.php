<?php

$conn = new PDO("mysql:host=localhost;dbname=dwwm_2020;charset=utf8mb4", "root", "", []);

$stmt = $conn->prepare("SELECT * FROM etudiant");

$stmt->execute();

$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($etudiants);

// $villes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach($villes as $ville){
//     var_dump($ville);
// }

while ($etudiant = $stmt->fetch()) {
    var_dump($etudiant["nom"]);
}
