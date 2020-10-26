<?php

$conn = new PDO("mysql:host=localhost;dbname=villes;charset=utf8mb4","toto","toto",[]);

$stmt = $conn->prepare("SELECT ville_nom FROM villes_france_free WHERE ville_departement='64' ORDER BY ville_nom LIMIT 100");

$stmt->execute();

// $villes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach($villes as $ville){
//     var_dump($ville);
// }

while($ville = $stmt->fetch()){
    var_dump($ville["ville_nom"]);
}