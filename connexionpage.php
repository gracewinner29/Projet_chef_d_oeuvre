
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
    <link rel="stylesheet" href="connexionpage.css">
</head>

<body>
 <div class="big-container">
        <div class="image-container">
            <img src="image/img.jpg" alt="" srcset="">
        </div>
        <div class="form-container">
            <form action="reservation.php" method="POST">
                <div class="name space">
                    <input type="text" name="pseudo" placeholder="Nom">
                </div>
                <div class="surame space">
                    <input type="password" name="mdp" placeholder="mot de passe">
                </div>
                <button> <a href="index.php">Retour</a> </button>
                <button name="send" type="submit">Submit</button>
            </form>                   
        </div>  
    </div>
</body>
</html>