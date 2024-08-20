<?php

//Exercice 1: Création et Affichage d'un Tableau Multidimensionnel
//Créez un tableau multidimensionnel pour stocker les informations suivantes sur trois étudiants :
//nom, âge, et note. Affichez ces informations.

$array_multiple =[     
    'étudiant1' => ['nom' => 'Abdé',    //etudiant 1 c'est une clé
                    'âge' => '28',
                    'notes' => 15],
        
    'étudiant2' => ['nom' => 'Aliou',
                    'age' => '34',
                    'notes' => 15],    
    
    'étudiant3' => ['nom' => 'Alexandre',
                    'âge' => '28',
                    'notes' => 15] 
                                
];

/*$array_multiple =
[
    [
        'voiture' => [
            'marque' => 'Alfa',
            'modele' => 'Giulia',
            'energie' => 'Diesel']
        
    ],
    [
        'marque' => 'Renault',
        'modele' => 'Megane',
        'energie' => 'electrique'
    ],
    [
        'marque' => 'Peugeot',
        '307',
        'energie' => 'en panne'
    ],
    [
        'magasin' => 'Besson',
        'pointure' => 38,
        'couleur' => 'rouge'
    ]
];*/

echo '<pre>';
print_r($array_multiple);
echo '<pre>';
echo '<br>';


//Exercice 2: Ajout d'Éléments à un Tableau Multidimensionnel
//Ajoutez un nouvel étudiant au tableau créé dans l'exercice précédent. Affichez ensuite le 
//tableau mis à jour.

$array_multiple ['étudiant4'] = [      //pour ajouter un étudiant $array[] = $var; var est la nouvelle valeur
    'nom' => 'Ali',
    'âge' => '25',
    'notes' => 13];

//<?php
//$array[] = $var;

print_r($array_multiple);
echo '<br>';

//Exercice 3: Accéder à des Éléments Spécifiques
//Affichez uniquement le nom et la note du deuxième étudiant dans le tableau.

echo $array_multiple['étudiant2']['nom'].'<br>'.$array_multiple['étudiant2']['notes'];
//echo $array_multiple[1]['marque'].'<br>'.$array_multiple[1]['energie'];

//Exercice 4





?>