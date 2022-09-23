<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');

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
    <title>Afficher les membres</title>
</head>
<body>
    <!-- afficher tous les membres -->
<?php
$recupUsers = $bdd->query('SELECT * FROM user');

if($users = $recupUsers->fetchAll(PDO::FETCH_ASSOC)){
    foreach ($users as $user){
        // echo $user["pseudo"];
        ?>
            <p><?= $user['pseudo']; ?> <a href="banir.php?id=<?= $user["id"]?>"> Banir le membre</a> </p> 
        <?php
    }
    
}
?>
    <!-- fin d'afficher tous les membres -->
</body>
</html>