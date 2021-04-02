<html>
  <head>
    <meta charset="utf-8">
    <title>S'habiller</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <div class="middle">
      <div class="phone">
        <form action="liste.php" method="POST">
          <h2>Aide-moi à choisir un vêtement!</h2>
          <h4> Je sélectionne mon occasion : </h4>

          <select name="occasion_choix" size="1" required>
            <option value="quotidien">Quotidien</option>
            <option value="festif">Festif</option>
            <option value="travail">Travail</option>
          </select>

          <p>Afficher d'autres suggestions:</p>
          Oui:<input type="radio" value="Yes" name="suggest"><br />
          Non:<input type="radio" value="No" name="suggest"><br />
          <input type="submit" name="affiche_vetements" value="Send"><input type="reset" value="Clear">
        </form>

        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
      </div>
    </div>
  </body>
</html>