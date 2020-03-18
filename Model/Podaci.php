<?php

/*
$array = ["name"=>"john"];    

print_r($array);

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$jsonbroj = json_decode($json);
echo $jsonbroj->a;

echo "\n";
var_dump(json_decode($json));
*/
// Read JSON file
$json = '{
             "title":"Apartmani",
             "logo":["https:\/\/i.croatiaimages.com\/a\/desktop\/images\/logos\/logo-adriatic.hr-hr.2fd85bab299.svg", "logo" ],   
             "naslov":"Apartmani uz more Kali(Ugljan) ",
             "slike":[ ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/dalmatia-apartments-near-beach-property-3.jpg?v=0531ef9594","Kali, Ugljan, Objekt 837 - Apartmani blizu mora sa šljunčanom plažom.","Objekt"],
                ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/dalmatia-apartments-near-beach-courtyard-1.jpg?v=0531ef9594","Kali, Ugljan, Dvorište 837 - Apartmani blizu mora sa šljunčanom plažom.","Dvorište"],
                ["https:\/\/i.croatiaimages.com\/places\/292\/dalmatia-ugljan-kali-croatia-1.jpg?v=902c1171df","Plaža  u mjestu Kali, Ugljan.","Najbliža plaža"]],
             "opis":" Kuća 837 u mjestu Kali, Ugljan - Sjeverna Dalmacija ima smještajne jedinice tipa Apartman (2) i udaljena je 20 m od mora. Najbliža plaža ovom smještaju je šljunčana. U kući postoji više apartmana u kojima će vjerojatno boraviti drugi gosti za vrijeme vašeg ljetovanja. Tijekom vašeg boravka, domaćini će također biti u kući. U ovoj je kući moguć besplatni pristup Internetu. Oko kuće postoji dvorište površine 50 m2. Vez za čamac je dostupan, ali ga je potrebno rezervirati unaprijed. U blizini kuće se nalaze: Trgovina, Ljekarna, Bankomat, Restoran. Na udaljenosti većoj od kilometra nalaze se: Hitna medicinska pomoć, Noćni klub, Centar.",
             "mali_naslov":"Dostupni apartmani",
             "APP1":["../View/jedinica.php?app=apartman1","Apartman1"],
             "APP2":["../View/jedinica.php?app=apartman2","Apartman2"],
             "Apartman1":{"title":"Prvi Apartman",
                          "logo":["https:\/\/i.croatiaimages.com\/a\/desktop\/images\/logos\/logo-adriatic.hr-hr.2fd85bab299.svg", "logo" ],   
                          "naslov":"Apartmani uz more Kali(Ugljan) ",
                          "slike":[["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-a\/kali-apartment-living-room-1.jpg?v=0531ef9594","prva","Objekt"],
                                   ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-a\/kali-apartment-dining-room-1.jpg?v=0531ef9594","druga","Dvorište"],
                                   ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-a\/kali-apartment-dining-room-1.jpg?v=0531ef9594","treca","plaza"]],
                         "naslov2":"Opis smjestaja",
                          "opis":"Apartman može primiti 5 gostiju. Ležajevi su raspoređeni u spavaćim sobama kojih ima 2, te u dnevnom boravku, unutar 57m2.<br> Gostima je na raspolaganju vlastiti balkon za uživanje u toplim ljetnim večerima. Dozvoljeno je pripremati hranu korištenjem zajedničkog roštilja.",
                          "mali_naslov":"Cjenik",
                          "prva_tabla":["broj osoba","1.7-1.9","1.1-1.7"],
                          "druga_tabla":["3","77€","32€"],
                          "treca_tabla":["5","22€","44€"],
                          "home":"../Controller/object.php",
                          "home_naziv":"Home"},
             "Apartman2":{"title":"Drugi Apartman",
                          "logo":["https:\/\/i.croatiaimages.com\/a\/desktop\/images\/logos\/logo-adriatic.hr-hr.2fd85bab299.svg", "logo" ],   
                          "naslov":"Apartmani uz more Kali(Ugljan) ",
                          "slike":[["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-b\/kali-apartment-living-room-1.jpg?v=0531ef9594","slika1","Smjestaj"],
                                    ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-b\/kali-apartment-terrace-1.jpg?v=0531ef9594","slika2","Smjestaj2"],
                                    ["https:\/\/i.croatiaimages.com\/private-accommodation\/837\/a-837-b\/kali-apartment-terrace-1.jpg?v=0531ef9594","slika3","Smjestaj3"]],
                         "naslov2":"Opis smjestaja",
                         "opis":"Apartman može primiti 3 gostiju. Ležajevi su raspoređeni u spavaćim sobama kojih ima 1, te u dnevnom boravku, unutar 38m2.<br> Gosti mogu uživati u pogledu na more sa vlastite terase. Dozvoljeno je pripremati hranu korištenjem zajedničkog roštilja.",
                         "mali_naslov":"Cjenik",
                         "prva_tabla":["broj osoba","1.7-1.9","1.1-1.7"],
                         "druga_tabla":["4","55€","26€"],
                         "treca_tabla":["24","23€","32€"],
                         "home":"../Controller/object.php",
                         "home_naziv":"Home"}
     
}';


$json_data = json_decode($json);

 



 

 


