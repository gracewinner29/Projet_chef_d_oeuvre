<?php
session_start();
if(isset($_POST['send'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
$pseudo_par_defaut = "admin";
$mdp_par_defaut = "admin1234";

$pseudo_saisi =htmlspecialchars($_POST['pseudo']);
$mdp_saisi = htmlspecialchars($_POST['mdp']);

if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
$_SESSION['mdp']= $mdp_saisi;
header("location: index.php");
}else{
    echo "votre mot de passe ou identiant es incorecte";
}

    } else{
        echo "entrez les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>connexion</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="pseudo" autocomplete="off">
    <br>
    <input type="password" name="mdp" autocomplete="off">
    <br><br>
    <input type="submit" name="send">
    
  </form>  
</body>
</html>