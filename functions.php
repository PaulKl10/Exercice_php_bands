<?php
require_once 'classes/band.php';
require_once 'classes/style.php';


function whichStyle(int $band_style, array $styles) {
        foreach($styles as $style) {
            if($style->getNumber() === $band_style) {
            return $style->getName();
         }
    }
}

function createStyles(){
    $fichier_style = file("styles.txt"); // Nom du fichier à afficher, son adresse de localisation

    $total = count($fichier_style); // Nombre total des lignes du fichier

    for($i = 0; $i < $total; $i++) 
    { 
    $styles_array = explode(",",$fichier_style[$i]); // On affiche ligne par ligne le contenu du fichier
    $styles[] = new Style($styles_array[0],$styles_array[1]);
    }
    return $styles;
}

function createBands(string $file){
    // Charger les Bands
$fichier_band = file($file); // Nom du fichier à afficher, son adresse de localisation
 
$total = count($fichier_band); // Nombre total des lignes du fichier

for($i = 0; $i < $total; $i++) 
{ 
$band_array = explode(",",$fichier_band[$i]); // On affiche ligne par ligne le contenu du fichier
$bands[] = new Band($band_array[1], $band_array[2], $band_array[3]);
} 
return $bands;
}