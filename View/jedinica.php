<?php
require_once ('../Model/Podaci.php');
$data = require'../Controller/jedinica.php';
?>  
<!DOCTYPE html>
<html  lang="en">
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title><?=$json_data->$data->title ?></title>
</head>

<body> 
    <header>
         <img src="<?=$json_data->$data->logo[0] ?>",alt="<?=$json_data->$data->logo[1] ?>"> <h1> <?=$json_data->$data->naslov ?> </h1> 
    </header>
	<a href="<?=$json_data->$data->home ?>"><i  ><?=$json_data->$data->home_naziv ?></i> </a><br>
    <div class="slike">
 <?php 
            for ($x = 0; $x < 3; $x++) {
                    for ($y = 0; $y <= 2; $y++) { 
                          $src= $json_data->$data->slike[$x][$y];
                        $y++;
                          $alt= $json_data->$data->slike[$x][$y];
                         $y++;
                      $title=$json_data->$data->slike[$x][$y];
                      echo"<img src=$src,alt=$alt,title=$title>";
                                                  }
   
                                      }
 ?>
    </div>  
       <b>  <?=$json_data->$data->naslov2 ?></b>

    <p><?=$json_data->$data->opis ?></p>

    <br>
    <h3> <?=$json_data->mali_naslov ?></h3>

    <table style="width:50%">
        <tr>
        <th><?=$json_data->$data->prva_tabla[0] ?></th>
        <th><?=$json_data->$data->prva_tabla[1] ?></th>
        <th><?=$json_data->$data->prva_tabla[2] ?></th>
        </tr>
        <tr>
          <td><?=$json_data->$data->druga_tabla[0] ?></td>
          <td><?=$json_data->$data->druga_tabla[1] ?></td>
          <td><?=$json_data->$data->druga_tabla[2] ?></td>  
        </tr>
        <tr>
        <td><?=$json_data->$data->treca_tabla[0] ?></td>
        <td><?=$json_data->$data->treca_tabla[1] ?></td> 
        <td><?=$json_data->$data->treca_tabla[2] ?></td>
        </tr>
	</table>

</body>
 


 