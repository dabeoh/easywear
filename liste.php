<html>
  <head>
    <meta charset="utf-8">
    <title>Mes habits</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <?php

        $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
        $rand=rand(0,3);
        echo '$rand';
        switch ($rand) {
 case 0 : 
    $meteo="ensoleille"; 
    break;
 case 1 :
    $meteo="orage"; 
    break;
 case 2 : 
    $meteo="pluie";  
    break;
  case 3 : 
    $meteo="neige";  
    break;
}
          $texte = "select * from vetements
                    where occasion='".$_POST['occasion_choix']."'and meteo='"$meteo"'";
          
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          while (ocifetchinto($ordre, $ligne)) 
              echo $ligne[0]." ".$ligne[1]
                    ."<b> Meteo : </b>".$ligne[2]
                    ."<b> Occasion : </b>".$ligne[3]."<br/>";
          
          ocilogoff($connection);
        ?>
        </br>
        
        <form method="POST" action="ajoutVetement.php">
          <input type="submit" value="Ajouter un autre vetement"/>
        </form>

         <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>
