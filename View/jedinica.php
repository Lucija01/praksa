<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
     
    <title><?=$data->title  ?></title>
</head>
<body> 
    <header>
    <a href="<?=$data->Home->homeLink ?>"><img src="<?=$data->logo->url ?>"  alt="<?=$data->logo->altText?>"></a>
     <h1> <?=$data->naslov ?> </h1> 
    </header>
      
    <div class="slike">
        <?php foreach ($data->slike as $slika) :?>
            <img src="<?= $slika->url ?>"  alt="<?= $slika->altText  ?>"  title="<?= $slika->titleText  ?>">
        <?php endforeach ?>  
    </div>  
    <b>Opis smjestaja</b>
    <p><?=$data->opis ?></p>
    <br>
    <h3>Cjenik</h3>
    <table style="width:50%">
    
       
        <tr>
        <th>Broj osoba</th>
        <?php foreach ($brOsoba[$jedinicaId-1] as $ap) :?>
        <th><?=$ap?></th>
        <?php endforeach ?>  
        </tr>
        <tr>
        <td>Ljetni mjeseci</td>
        <?php foreach ($ljeto[$jedinicaId-1] as $ap) :?>
        <td><?=$ap ?></td>
        <?php endforeach ?>  
        </tr>
        <tr>
        <td>Ostatak godine</td>
        <?php foreach ($ostGodine[$jedinicaId-1] as $ap) :?>
        <td><?=$ap?></td>
        <?php endforeach ?> 
        </tr>
   
         
    </table>

    <h1>Kalendar rezervacije</h1>
    <div class="month">   
        <div class="column">   
  <ul>
     
    <li>
      July<br>
      
    </li>
  </ul>



<ul class="days"> 
<?php foreach ($mjesec->srpanj as $mj) :?> 
  <li><span class=<?=$nedostupan ?>><?=$mj ?></span></li>
  
  <?php endforeach ?> 
</ul>

        </div>
        <div class="column">
  
  <ul >
     
    <li>
      August<br>
      
    </li>
  </ul>



  <ul class="days"> 
<?php foreach ($mjesec->kolovoz as $mj) :?> 
  <li><span class=<?=$nedostupan ?>><?=$mj ?></span></li>
  
  <?php endforeach ?> 
</ul>
   
</div>
        <div class="column">
  
     
  <ul >
     
    <li>
      September<br>
      
    </li>
  </ul>
 


  <ul class="days"> 
<?php foreach ($mjesec->rujan as $mj) :?> 
   
  <li><span class="<?=$dostupan?>"><?=$mj ?></span></li>
  
  <?php endforeach ?> 
</ul>
  
</ul>
        </div>

        </div>


   
    
     <p id="forma"><h3>Rezervacija</h3>
  
 <form onsubmit="return myFunction()"  >
            <table class="emailtable"  id="myForm">
            <tr><td><label for="name" class="emaillabel">Ime: </label></td><td><input type="text" id="fullname" name="fullname" size="50" value="" style="width: 290px;" /></td></tr>
            <tr><td><label for="phone" class="emaillabel">Mobitel: </label></td><td><input type="text" id="phone" name="phone" size="20" value="" style="width: 290px;" /></td></tr>
            <tr><td><label for="email" class="emaillabel">Email: </label></td><td><input type="text" id="email" name="email" size="50" value="" style="width: 290px;" /></td></tr>
            <tr><td><label for="dolazak" class="emaillabel">Datum dolaska: </label></td><td> <input type="text" name="dolazak"id="datepicker"></td></tr>
            <tr><td><label for="odlazak" class="emaillabel">Datum odlaska: </label></td><td> <input type="text" name="odlazak"id="datepicker2"></td></tr>
            <tr><td><label for="number" class="emaillabel">Broj osoba: </label></td><td> <select id="Number">
            <?php foreach ($brOsoba[$jedinicaId-1] as $ap) :?>
                    <option value="number1"><?=$ap?></option>
                    <?php endforeach ?>
                    
                  </select> </tr></td>
            </table>
                 
           
        <br><input id="submitmessage" type="submit"   name ="submitmessage"   value="Submit" />
        
        </form>
 
       
    

 </p>


   
    
</body> 

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../javascript/forma.js"></script>  
    
</html>
