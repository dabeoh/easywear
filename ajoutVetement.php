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
          <option value="">- - - - - -</option>
          <option value="Bleu"  >Bleu</option>
          <option value="Gris"  >Gris</option>
          <option value="Marron">Marron</option>
          <option value="Orange">Orange</option>
          <option value="Rouge" >Rouge</option>
          <option value="Violet">Violet</option>
          <option value="Blanc" >Blanc</option>
          <option value="Jaune" >Jaune</option>
          <option value="Noir"  >Noir</option>
          <option value="Rose"  >Rose</option>
          <option value="Vert"  >Vert</option>
          </select>

          <p>Type:</p>
          <select name="type" size="1" required>
            <option value="">- - - - - -</option>
            <!--Haut3-->
            <option value="manteau" >Manteau</option>
            <option value="anorak"  >Anorak</option>
            <!--Haut2-->
            <option value="pull"  >Pull</option>
            <option value="veste" >Veste</option>
            <option value="sweat" >Sweat</option>
            <!--Haut1-->
            <option value="tshirt"    >T-Shirt</option>
            <option value="polo"      >Polo</option>
            <option value="chemise"   >Chemise</option>
            <option value="debardeur" >Débardeur</option>
            <option value="tunique"   >Tunique</option>
            <option value="robe"      >Robe</option>
            <!--Haut0-->
            <option value="soutiengorge" >Soutien-Gorge</option>
            <option value="brassiere"     >Brassière</option>
            <!--Bas0-->
            <option value="culotte" >Culotte</option>
            <option value="string"  >String</option>
            <option value="tanga"   >Tanga</option>
            <!--Bas1-->
            <option value="pantalon">Pantalon</option>
            <option value="jean"   >Jean</option>
            <option value="jogging" >jogging</option>
            <option value="short"   >Short</option>
            <option value="jupe"    >Jupe</option>
            <!--Bas2-->
            <option value="chaussettes">Chaussettes</option>
            <!--Bas3-->
            <option value="baskets" >Baskets</option>
            <option value="talon"   >Chaussures à talon</option>
          </select>

          <p>Meteo</p>
          <select name="meteo" size="1" required>
          <option value="">- - - - - -</option>
          <option value="Pluie">Pluie</option>
          <option value="Neige">Neige</option>
          <option value="Ensoleille">Ensoleille</option>
          <option value="Orage">Orage</option>
          </select>
          <br />

          <p>Occasion:</p>
          <select name="occasion" size="1" required>
          <option value="">- - - - - -</option>
          <option value="quotidien">Quotidien</option>
          <option value="festif">Festif</option>
          <option value="travail">Travail</option>

          </select>
          <br>
                  
           <input class='button' type='submit' name='sent' value='Ajouter'>
   
        </form>

        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
     
      </div>
    </div>
  </body>
</html>
