<?php
$eleve = [
    "prenom" => "Maxime",
    "genre" => "M",
    "taille" => 157,
    "age" => 13,
    "notes" => [
        "Francais" => [ 12, 14, 7, 11 ],
        "Anglais" => [ 14, 11, 9, 18],
        "Maths" => [ 7, 9, 11, 12]
    ]
    ];
    /* affichage du prénom-de la note d'anglais la plus haute- et de la note d'anglais la plus basse */
    echo $eleve["prenom"];
    echo"<br>";
    echo $eleve["notes"]["Anglais"][3];
    echo"<br>";
    echo $eleve["notes"]["Francais"][2];
    echo"<br>";
    
    /* Suppression de la note 11 en Maths */
    unset($eleve["notes"]["Maths"][2]);

     /* ajout des notes [15,20] en eps dans le tableau notes */
    $eleve["notes"]["eps"] = [15, 20];

    var_dump($eleve);