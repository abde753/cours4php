<?php

//Exercice1
//Créez un tableau associatif pour stocker les informations suivantes sur une personne : nom, 
//âge, adresse. Ensuite, affichez ces informations

$arrayinfo = [
    'nom' => 'diallo',
    'age' => '28',
    'adresse' => '30 rue Jean de la Taille 45000 Orléans'
];
foreach($arrayinfo as $cle => $valeur)
{
    echo $cle.' = '.$valeur."<br>";
}

// ou pour afficher une seule valeur par exemple le nom : echo $arrayinfo['nom'].'<br>';


//Exercice2
//créez un tableau contenant les noms de cinq fruits. Utilisez une boucle foreach pour afficher 
//chaque fruit.

$fruits=['orange','banane','kiwi','pomme'];

foreach ($fruits as $value)   //pas besoin de key car il n'y pas de clé, il n'y que des valeurs.
{
    echo $value.'<br>';
}

echo '<br>';

//Exercice3
//créez un tableau contenant les jours de la semaine. Ajoutez "Dimanche" à la fin du tableau 
//et supprimez "Lundi" du début du tableau avec la fonction array_shift. Affichez le tableau 
//résultant.

$array_jour_semaine = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']; 

array_push($array_jour_semaine, "Dimanche");

$jour_semaine_àjour=array_shift($array_jour_semaine); // on supprime Lundi (1er jour de la semaine) $fruit = array_shift($stack); voir doc

print_r($array_jour_semaine);   //print_r($stack) dans la doc;

echo '<br>';

//Exercice4
//Créez un tableau contenant des nombres aléatoires. Triez le tableau dans l'ordre croissant 
//(fonction native de PHP) et affichez les valeurs triées.
$nombre_aléatoire = [15,3,8,1,26,25,14]; 

SORT($nombre_aléatoire);

print_r($nombre_aléatoire);

echo '<br>';
echo '<br>';

//Exercice5

//Créez deux tableaux : un contenant les prénoms et un autre contenant les noms de famille. 
//Fusionnez ces deux tableaux avec la fonction array_combine pour créer un tableau associatif 
//complet (prénom => nom de famille).

$a = array('Abdé', 'Florian', 'Alexandre','Aliou');
$b = array('Diallo', 'Mancieri', 'Grillon','Bah');
$c = array_combine($a, $b);

print_r($c);

echo '<br>';
echo '<br>';

//Exercice6
//Créez un tableau contenant des nombres. Filtrez les nombres pairs à l’aide de la fonction 
//array_filter et affichez-les.


$array2 = [15,3,8,1,26,25,14,28,104]; 

function even($var)
{
    // retourne si l'entier en entrée est pair
    return !($var & 1);
}

print_r(array_filter($array2,"even"));

echo '<br>';
echo '<br>';

//Exercice 7: Calculer la Somme et la Moyenne

//Créez un tableau contenant des notes d'examens. Calculez et affichez la somme et la 
//moyenne des notes à l’aide de la fonction array_sum

$notes = [15,3,8,4,11,12,19,14,18,17,2,5]; 

echo 'Somme = '.array_sum($notes);
echo '<br>';
echo 'Moyenne = '.array_sum($notes)/count($notes);

//$a = array(2, 4, 6, 8);
//echo "sum(a) = " . array_sum($a) . "\n";

?>