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
          //echo '$rand';
          $liste_meteo=array("ensoleille","neige","pluie","orage");
          
          shuffle($liste_meteo);
          $meteo=$liste_meteo[rand(0,3)];
        
          $texte = "select * from vetements
                    where occasion='".$_POST['occasion_choix']."'and meteo='".$meteo."'";
          
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          
          echo  "<table>
                  <tr>
                    <th>Type</th>
                    <th>Couleur</th>
                    <th>Meteo</th>
                    <th>Occasion</th>
                </tr>";
        
            while (ocifetchinto($ordre, $ligne)) 
                echo "<tr>
                        <td>".$ligne[0]."</td>
                        <td>".$ligne[1]."</td>
                        <td>".$ligne[2]."</td>
                        <td>".$ligne[3]."</td>
                      </tr>";
          echo "</table>";
            
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
