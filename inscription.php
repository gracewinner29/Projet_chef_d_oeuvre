<?php

   $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');

    if(isset($_POST['submit'])){
      if(!empty($_POST['pseudo']) && !empty ($_POST['mdp'])&& !empty($_POST['mdp2']) &&
      isset($_POST['pseudo']) && isset ($_POST['mdp'])&& isset($_POST['mdp2'])){

          $pseudo = $_POST['pseudo'];
          $mdp = $_POST['mdp'];
          $mdp2 = $_POST['mdp2'];
          echo $mdp;
          if($mdp==$mdp2){
            $sql = 'INSERT INTO `user` (`pseudo`, `mdp`) VALUES (?, ?)';
            $request = $bdd->prepare($sql);
            $request->execute(array($pseudo,$mdp));

            header('location:/');
          }else{
            $errorMsg= "Votre mot de passe non conforme"; 
          }
      }else{
        $errorMsg="Veuillez remplir tous les champs";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'inscription</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="big-container">
          <div class="image-container">
            <img src="image/entretien tes cheveux 4C.jpg " alt="" srcset="">
          </div>
          <div class="form-container">
              <form action="" method="POST">
                  <div class="email  space">
                      <input type="text" name="pseudo" placeholder="pseudo">
                  </div>
                  <div class="subject  space">
                      <input type="password" name="mdp" required placeholder="mot de passe">
                  </div>
                  <div class="subject  space">
                      <input type="password" name="mdp2" required placeholder=" confirmez mot de passe">
                  </div>
                  
                  <button type="submit" name="submit" >S'inscrire</button> 
              </form>  
            </div>  
  </div>
</body>
</html>