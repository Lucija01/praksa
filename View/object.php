<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../second/style/style.css">
        <title><?=$glavnaStranica->title ?></title>
    </head>
    <body> 
        <header>
            <img src="<?=$glavnaStranica->logo->url ?>" alt="<?=$glavnaStranica->logo->altText ?>"> 
            <h1><?=$glavnaStranica->naslov ?></h1> 
        </header>
        <div class="slike">
            <?php foreach ($glavnaStranica->slike as $slika) :?>
                <img src="<?= $slika->url ?>" alt="<?= $slika->altText  ?>"  title="<?= $slika->titleText  ?>">
            <?php endforeach ?>        
        </div>       
        <p><?=$glavnaStranica->opis ?></p>
        <br>
        <h3>Opis smjestaja</h3>
        <p>
            <?php foreach ($jedinice as $jedinica) :?>
                <a href="../second/Controller/jedinica.php/?ap=<?= $jedinica->id ?>"><?=$jedinica->nazivJedinice?></a>
            <?php endforeach ?> 
        </p>
    </body>
</html>
