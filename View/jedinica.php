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
        <th><?=$data->table->prva_tabla[0] ?></th>
        <th><?=$data->table->prva_tabla[1] ?></th>
        <th><?=$data->table->prva_tabla[2] ?></th>
        </tr>
        <tr>
        <td><?=$data->table->druga_tabla[0] ?></td>
        <td><?=$data->table->druga_tabla[1] ?></td>
        <td><?=$data->table->druga_tabla[2] ?></td>  
        </tr>
        <tr>
        <td><?=$data->table->treca_tabla[0] ?></td>
        <td><?=$data->table->treca_tabla[1] ?></td> 
        <td><?=$data->table->treca_tabla[2] ?></td>
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
  <li><span class="false">1</span></li>
  <li><span class="false">2</span></li>
  <li><span class="false">3</span></li>
  <li><span class="false">4</span></li>
  <li><span class="false">5</span></li>
  <li><span class="active">6</span></li>
  <li><span class="active">7</span></li>
  <li><span class="active">8</span></li>
  <li><span class="active">9</span></li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

        </div>
        <div class="column">
  
  <ul >
     
    <li>
      August<br>
      
    </li>
  </ul>



<ul class="days" >  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>
        <div class="column">
  
     
  <ul >
     
    <li>
      September<br>
      
    </li>
  </ul>
 


<ul class="days" >  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li></li> 
</ul>
        </div>

        </div>


   
    
     <p id="forma"><h3>Rezervacija</h3>
  
 <form onsubmit="return myFunction()" method="post">
            <table class="emailtable">
            <tr><td><label for="name" class="emaillabel">Ime: </label></td><td><input type="text" name="fullname" size="50" value="Name" style="width: 290px;" /></td></tr>
            <tr><td><label for="phone" class="emaillabel">Mobitel: </label></td><td><input type="text" name="phone" size="20" value="Phone" style="width: 290px;" /></td></tr>
            <tr><td><label for="email" class="emaillabel">Email: </label></td><td><input type="text" name="email" size="50" value="Email" style="width: 290px;" /></td></tr>
            <tr><td><label for="dolazak" class="emaillabel">Datum dolaska: </label></td><td> <input type="text" id="datepicker"></tr></td>
            <tr><td><label for="odlazak" class="emaillabel">Datum odlaska: </label></td><td> <input type="text" id="datepicker2"></tr></td>
            <tr><td><label for="number" class="emaillabel">Broj osoba: </label></td><td> <select id="Number">
                    <option value="number1">3 osobe</option>
                    <option value="number2">5 osoba</option>
                  </select> </tr></td>
            </table>
                 
            <input id="acknowledgment" type="checkbox" name="acknowledgment" value="1" onclick="enableSubmitButton()"><label for="acknowledgment">I acknowledge that there may be a delay in responding to this request.</label><br>
        <br><input id="submitmessage" type="submit" name ="submitmessage" value="Submit" disabled />
        </form>

 </p>


   
    
</body> 

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../javascript/forma.js"></script>
</html>
