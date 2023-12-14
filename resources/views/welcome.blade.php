<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 <title> index </title>
 <link href="style_form.css" rel="stylesheet">
 </head>
 <body>
 
<form action="traitement.php" method="POST">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required><br>

  <label for="telephone">Téléphone :</label>
  <input type="tel" id="telephone" name="telephone" required><br>

  <label for="description">Description du problème :</label><br>
  <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

  <input type="submit" value="Envoyer">
</form>
 </body>
</html>