<?php
	require_once ('../Model/Podaci.php');
 ?>

 <!DOCTYPE html>
<html  lang="en">
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title><?=$json_data->title ?></title>
</head>


<body> 
    <header>
         <img src="<?=$json_data->logo[0] ?>",alt="<?=$json_data->logo[1] ?>"> <h1> <?=$json_data->naslov ?> </h1> 
    </header>

    <div class="slike">
 <?php 
           for ($x = 0; $x < 3; $x++) {
                for ($y = 0; $y <= 2; $y++) { 
                       $src= $json_data->slike[$x][$y];
                         $y++;
                       $alt= $json_data->slike[$x][$y];
                          $y++;
                      $title=$json_data->slike[$x][$y];
                     echo"<img src=$src,alt=$alt,title=$title>";
                                              }
   
                                        }
 ?>
    </div>  
       
    <p><?=$json_data->opis ?></p>

    <br>
    <h3> <?=$json_data->mali_naslov ?></h3>

    <p >
        <a href=" <?=$json_data->APP1[0] ?>" > <?=$json_data->APP1[1] ?></a>
        <a href=" <?=$json_data->APP2[0] ?>"> <?=$json_data->APP2[1] ?></a>
    </p>

</body>
 
</html>




 
