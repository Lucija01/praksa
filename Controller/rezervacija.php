<?php 
require_once ('../Model/Raspolozivi_apartmani.php'); 
require_once ('../Controller/jedinica.php');
require_once ('../View/jedinica.php');
 


 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);