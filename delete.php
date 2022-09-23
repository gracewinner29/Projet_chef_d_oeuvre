<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
  
//Recuperation
if(isset($_GET['id']) AND !empty($_GET['id'])){
    echo $_GET['id'];
    $recupId= $_GET['id'];
    $deleteUsers= $bdd->prepare('DELETE FROM reservation_clients WHERE id =?');
    $deleteUsers->execute(array($recupId));
    echo"Suppression";
    // $users = $bdd->prepare('SELECT *FROM reservation_clients WHERE id =?');
    // $users->execute(array($recupId)); 
} else{
    echo"echec";
}



    // var_dump($recupReservations)
?>