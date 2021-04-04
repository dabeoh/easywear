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
          $liste_meteo=array("Ensoleille","Neige","Pluie","Orage");
          shuffle($liste_meteo);
          //$meteo=$liste_meteo[rand(0,3)];
          $meteo="Ensoleille";
          $occasion=$_POST['occasion_choix'];
        
          $texte = "select * from vetements
                    where occasion='".$occasion."'and meteo='".$meteo."'";
          
          //example de if (pseudo code):
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          
          $vetementBas=null;
          $vetementHaut=null;

          echo "Contexte du jour choisi :".$occasion."<br>
                Aujourd'hui la Meteo est :".$meteo."<br>
                Vêtements suggérés :<br>
                <table>
                  <tr>
                    <th>Type</th>
                    <th>Couleur</th>
                </tr>";
          
          while (ocifetchinto($ordre, $vetement)){ //$vetement = ligne
            $typeVetement = $vetement[0]; // type soit short, veste..
            if ($typeVetement == "pantalon"){
              $vetementBas=$vetement;
              echo "vetement bas : ".$vetementBas[0];
            }
            else if ($typeVetement == "manteau"){
              $vetementHaut=$vetement;
              echo "vetement haut : ".$vetementHaut[0];
              
            }
          }
          echo "<tr>
                  <td>".$vetementBas[0]."</td>
                  <td>".$vetementBas[1]."</td>
                  <td>".$vetementHaut[0]."</td>
                  <td>".$vetementHaut[1]."</td>
                </tr>";
          echo "</table>";

          

          /*$ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          echo "Contexte du jour choisi :".$occasion."<br>
                Aujourd'hui la Meteo est :".$meteo."<br>
                Vêtements suggérés :<br>
                <table>
                  <tr>
                    <th>Type</th>
                    <th>Couleur</th>
                </tr>";
        
            while (ocifetchinto($ordre, $ligne)) 
                echo "<tr>
                        <td>".$ligne[0]."</td>
                        <td>".$ligne[1]."</td>
                      </tr>";
          echo "</table>";
            
          ocilogoff($connection);*/
        ?>
        </br>
        
        <form method="POST" action="ajoutVetement.php">
          <input class="button" type="submit" value="Ajouter un autre vetement"/>
        </form>

         <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>
