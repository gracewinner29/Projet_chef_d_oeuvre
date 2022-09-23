<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_membres";
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];
$ok = $_POST['ok'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

$sql = "INSERT INTO `user` (`id`, `pseudo`, `mdp`) VALUES (NULL, '$pseudo', '$mdp')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }

?>