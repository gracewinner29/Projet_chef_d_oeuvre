<?php      
    include('connexion.php');  
    $pseudo = $_POST['pseudo'];  
    $mdp = $_POST['mdp'];  
      
        //to prevent from mysqli injection  
        $pseudo = stripcslashes($pseudo);  
        $mdp = stripcslashes($mdp);  
        $pseudo = mysqli_real_escape_string($conn, $pseudo);  
        $mdp = mysqli_real_escape_string($conn, $mdp);  
      
        $sql = "select*from user where pseudo = '$pseudo' and mdp = '$mdp'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid pseudo or mdp.</h1>";  
        }     
?>  