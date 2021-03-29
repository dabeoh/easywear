<html>
  <body>
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
<form method="POST" action="easywear.php">
    <input type="submit" value="Retour vers la page principale"/>
    </form>
 </body>
</html>