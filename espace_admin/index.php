<?php
session_start();
if(!$_SESSION['mdp']){
 header('location: connexion.php');   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
  <a href="membre.php">Afficher tous les membres</a>  
  <a href="publier_article.php">Publier un nouvel article</a>
</body>
</html>