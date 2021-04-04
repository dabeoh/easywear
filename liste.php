<html>
  <head>
    <meta charset="utf-8">
    <title>Mes habits</title>
    <link rel="stylesheet" href="style2.css">
  </head>

  <body>
    <div class="middle">
      <div class="phone">

        <?php
          $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
          $liste_meteo=array("Ensoleille","Neige","Pluie","Orage");
          shuffle($liste_meteo);
          //$meteo=$liste_meteo[rand(0,3)];
          $meteo = "Ensoleille";
          $occasion=$_POST['occasion_choix'];

          $col_tri=array("type","couleur");
          $ordre_tri=array("asc","desc");
          shuffle($col_tri);
          shuffle($ordre_tri);
          $texte = "select * from vetements
                    where occasion='".$occasion."'and meteo='".$meteo."'
                    order by ".$col_tri[0]." ".$ordre_tri[0];
          
          //example de if (pseudo code):
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          
          $vetementHaut3=null;
          $vetementHaut2=null;
          $vetementHaut1=null;
          $vetementHaut0=null;
          $vetementBas0=null;
          $vetementBas1=null;
          $vetementBas2=null;
          $vetementBas3=null;

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
            if ($typeVetement == "manteau" || $typeVetement == "anorak" ){
              $vetementHaut3=$vetement;
            } else if ($typeVetement == "pull" || $typeVetement == "veste" || $typeVetement == "sweat"){
              $vetementHaut2=$vetement;
            } else if ( $typeVetement == "tshirt" ||  $typeVetement == "polo" || $typeVetement == "chemise" || $typeVetement == "debardeur" || $typeVetement == "tunique" || $typeVetement == "robe" ){
              $vetementHaut1=$vetement;
            } else if( $typeVetement == "soutien-gorge" || $typeVetement == "brassiere" ){
              $vetementHaut0=$vetement;
            } else if($typeVetement == "culotte" || $typeVetement == "string" || $typeVetement == "tanga" ) {
              $vetementBas0=$vetement;
            } else if ( $typeVetement == "pantalon" || $typeVetement == "jean" || $typeVetement == "jogging" || $typeVetement == "short" || $typeVetement == "jupe" ){
              $vetementBas1=$vetement;
            } else if ($typeVetement == "chaussettes" ){
              $vetementBas2=$vetement;
            } else if ($typeVetement == "baskets" || $typeVetement == "talon" ) {
              $vetementBas3=$vetement;
            }
          }
          
          echo "<tr>
                  <td>".$vetementHaut3[0]."</td>
                  <td>".$vetementHaut3[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementHaut2[0]."</td>
                  <td>".$vetementHaut2[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementHaut1[0]."</td>
                  <td>".$vetementHaut1[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementHaut0[0]."</td>
                  <td>".$vetementHaut0[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementBas0[0]."</td>
                  <td>".$vetementBas0[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementBas1[0]."</td>
                  <td>".$vetementBas1[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementBas2[0]."</td>
                  <td>".$vetementBas2[1]."</td>
                </tr>
                <tr>
                  <td>".$vetementBas3[0]."</td>
                  <td>".$vetementBas3[1]."</td>
                </tr>
          </table>";
        ?>
        </br>
        
        <!--Boutons-->
        <a href="liste.php" class="button">Autre Suggestion</a>
        <a href="ajoutVetement.php" class="button">Ajouter un Nouveau Vêtement</a>
         <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>