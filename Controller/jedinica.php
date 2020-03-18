<?php 
require_once ('../Model/Podaci.php'); 
$jedinicaId = $_GET['ap'] ?? '';
$jedinice= $jsonData->objekt->jedinice;//array
$jediniceIdevi = []; 
foreach ($jedinice as $jedinica) {
	$jediniceIdevi[] = $jedinica->id;
}
if (!in_array($jedinicaId, $jediniceIdevi)) {
	echo "NEPOZNATA JEDINICA";
	exit;
};
$data=$jsonData->objekt->jedinice[($jedinicaId-1)];
require_once ('../View/jedinica.php');
