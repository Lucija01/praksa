<?php 
require_once ('../Model/Podaci.php'); 
require_once ('../Model/Raspolozivi_apartmani.php'); 

$jedinicaId = $_GET['ap'] ?? '';
$jedinice= $jsonData->objekt->jedinice;//array
$jediniceIdevi = []; 
$brOsoba=$jsonRaspolozivi->apartman->broj_osoba;
$ljeto=$jsonRaspolozivi->apartman->ljeto;
$ostGodine=$jsonRaspolozivi->apartman->ostatak_godine;
$mjesec=$jsonRaspolozivi->kalendar;
$dostupan=$jsonRaspolozivi->dostupnost[0];
$nedostupan=$jsonRaspolozivi->dostupnost[1];
 

foreach ($jedinice as $jedinica) {
	$jediniceIdevi[] = $jedinica->id;
}
if (!in_array($jedinicaId, $jediniceIdevi)) {
	echo "NEPOZNATA JEDINICA";
	exit;
};
$data=$jsonData->objekt->jedinice[($jedinicaId-1)];
require_once ('../View/jedinica.php');


