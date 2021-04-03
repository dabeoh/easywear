<html>
  <head>
      <meta charset="utf-8">
      <title>Ajout d'un habit</title>
      <link rel="stylesheet" href="style.css">
    </head>

  <body>
    <div class="middle">
      <div class="phone">
        <form action="ajoute.php" method="POST">
          <h2>Rajouter un vetement:</h2>
          <p>Couleur:</p> 
          <select name="color" size="1" required>
          <option value="empty">- - - - - -</option>
          <option value="Bleu">Bleu</option>
          <option value="Gris">Gris</option>
          <option value="Marron">Marron</option>
          <option value="Orange">Orange</option>
          <option value="Rouge">Rouge</option>
          <option value="Violet">Violet</option>
          <option value="Blanc">Blanc</option>
          <option value="Jaune">Jaune</option>
          <option value="Noir">Noir</option>
          <option value="Rose">Rose</option>
          <option value="Vert">Vert</option>
          </select>

          <p>Type:</p>
          <select name="type" size="1" required>
          <option value="empty">- - - - - -</option>
          <option value="veste">Veste</option>
          <option value="shirt">Shirt</option>
          <option value="polo">Polo</option>
          <option value="pantalon">Pantalon</option>
          <option value="shorts">Shorts</option>
          <option value="chaussettes">Chaussettes</option>
          <option value="pantoufles">Pantoufles</option>
          <option value="baskets">Baskets</option>
          <option value="casquette">casquette</option>
          <option value="sweat">Sweat</option>
          <option value="chemise">Chemise</option>
          <option value="manteau">Manteau</option>
          <option value="jeans">Jeans</option>
          <option value="débardeur">Débardeur</option>
          <option value="pull">Pull</option>
          <option value="anorak">Anorak</option>
          <option value="tunique">Tunique</option>
          <option value="robe">Robe</option>
          </select>

          <p>Meteo</p>
          <select name="meteo" size="1" required>
          <option value="empty">- - - - - -</option>
          <option value="Pluie">Pluie</option>
          <option value="Neige">Neige</option>
          <option value="Ensoleille">Ensoleille</option>
          <option value="Orage">Orage</option>
          </select>
          <br />

          <p>Occasion:</p>
          <select name="occasion" size="1" required>
          <option value="empty">- - - - - -</option>
          <option value="quotidien">Quotidien</option>
          <option value="festif">Festif</option>
          <option value="travail">Travail</option>

          </select>
          <br>
          <input type="reset" value="Clear">
          
           <?php

           if($_POST['occasion'].value=="empty"||$_POST['meteo'].value=="empty"||$_POST['type'].value=="empty"||$_POST['couleur'].value=="empty"){

             header('Location: ajoutVetement.php');  

           } else {
           echo  "<input type='submit' name='sent' value='Ajouter'>";
            } ?>
   
        </form>

        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
     
      </div>
    </div>
  </body>
</html>
