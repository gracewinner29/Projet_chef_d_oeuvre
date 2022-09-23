<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
if(!$_SESSION['mdp']){
 header('location: connexion.php');   
}

if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST));
}
else{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publier un article</title>
</head>
<body>
   <form action="" method="POST">
    <input type="text" name="titre">
    <br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
<br>  
<input type="submit" name="envoi"> 
</form> 
</body>
</html>