<?php
// Les tableaux en PHP
$array1 = ['alfa','renault','peugeot']; // Tableau avec indices
$array2 = [
    'marque' => 'Alfa',
    'modele' => 'Mito',
    'energie' => 'essence'
]; // Tableau avec clés et valeurs
// Pour afficher les clés et les valeurs
foreach($array2 as $cle => $valeur)
{
    echo $cle.' = '.$valeur."<br>";
}
$array_multiple =
[

    [     'voiture1' => [                 
                            'marque' => 'Alfa',
                            'modele' => 'Giulia',
                            'energie' => 'Diesel']     
    ],

    [       'voiture2' => [
                            'marque' => 'Renault',
                            'modele' => 'Megane',
                            'energie' => 'electrique']
    ],
    [       'voiture3' => [
                            'marque' => 'Peugeot',
                            'modele' => '307',
                            'energie' => 'diesel']
    ],
    [       'voiture4' => [
                            'marque' => 'Citroen',
                            'modele' => 'C4',
                            'energie' => 'diesel']
    ]
];

echo '<pre>';
print_r($array_multiple);
echo '<pre>';

// Afficher la marque de la voiture 4 
echo $array_multiple[3]['voiture4']['marque'];
echo '<br>';

// Parcourir un tableau multiple avec des boucles
foreach($array_multiple as $key => $value)
{
    echo $key;
    echo '<br>';
}
   
    

// Utilisation d'array_merge pour fusionner 2 tableaux
$tab1 = ['marque' => 'Alfa','modele' => 'Giulietta','energie' => 'essence'];
$tab2 = ['marque' => 'Renault','modele' => 'Megane','option' => 'velo'];
$merge = array_merge($tab1,$tab2);
echo '<pre>';
print_r($merge);
echo '</pre>';
?>