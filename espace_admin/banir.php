<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid= $_GET['id'];
$recupUser = $bdd->prepare('SELECT * FROM user WHERE id = ?' );
$recupUser->execute(array($getid));
if ($recupUser->rowCount()>0){
  $banirUser = $bdd->prepare('DELETE FROM user WHERE id = ?');
  $banirUser->execute(array($getid));
  header('location: membre.php');

}else{
    echo "aucun membre n'a été trouvé";
}
} else{
    echo "l'identifiant n'a pas été récupéré";
}

?>