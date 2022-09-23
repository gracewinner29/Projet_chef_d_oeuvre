
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
  
if(isset($_POST['send'])){ 
    echo"hello";

  if(!empty($_POST['name'])AND !empty($_POST['surname']) AND !empty($_POST['mail']) 
  AND !empty($_POST['salon']) AND !empty($_POST['jour']) AND !empty($_POST['heure'])
  AND !empty($_POST['num'])
  ){
    echo"hello ";
    // recupération des données dans la variable

        $name = ($_POST['name']);
        $surname = ($_POST['surname']);
        $mail = ($_POST['mail']);
        $salon = ($_POST['salon']);
        $jour = ($_POST['jour']);
        $heure = ($_POST['heure']);
        $num = ($_POST['num']);


    $insertUser = $bdd->prepare('INSERT INTO reservation_clients(nom,prenom,mail,salon,jour,heure,num) VALUES(?,?,?,?,?,?,?)');
    $insertUser->execute(array($name,$surname,$mail,$salon,$jour,$heure, $num));
            echo $name;
        if($insertUser->rowcount()>0){
            // echo" vous avez etez enregistre";
            header('location: successregister.php');

        }else{
            echo"echec";
        }

    
  }else{
  echo"veuillez completez tous les champs";  
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="reservation.css">
    <title>Reservation form</title>
  <!-- Favicons -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">


<!-- ======================================================== --> 
</head>
<body >
     <!-- NAV BAR -->
<nav class="navbar navbar-expand-lg bg-dark p-5  ">
  <div class="container-fluid " >
     <h2 class="text-light p-3">Hair-Palace</h2> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Accueil</a>
        </li>
        
        
      </ul>
     
     
    </div>
  </div>
</nav>
<!-- fin nav bar -->

<!-- FORM CONTAINER -->

    <div class="container form col-4 ">
    <div class=" form1 i ">
    <h2 class="text-light e">Reservation</h2>
    <form action="" method="post" class="text-light col-8  ">
         <label for="idEmail"class="form-label">Nom</label>
        <input type="text" name="name" id="idEmail" class="form-control ">
        <label for="idEmail"class="form-label">Prénom</label>
        <input type="text" name="surname" id="idEmail" class="form-control">
        <label for="idEmail"class="form-label">Email :</label>
        <input type="email" name="mail" id="idEmail" class="form-control">
        <label for="idEmail"class="form-label">Salon de préférence :</label>       
        <select name="salon" id=""class="form-select md-3" >
            <option value=""></option>
            <option value="Agoè">Agoè</option>
            <option value="Hedzranawoé">Hedzranawoé</option>
            <option value="Totsi">Totsi</option>
            <option value="Adidogomé">Adidogomé</option>
        </select>
        <label for="idEmail"class="form-label">Jour :</label>
        <input type="date" name="jour" id="idEmail" class="form-control">
        <label for="idEmail"class="form-label">Heure :</label>
        <input type="time" name="heure" id="idEmail" class="form-control">
        <label for="idEmail"class="form-label">Tel</label>
        <input type="text" name="num" id="idEmail" class="form-control">
        <div class="gap-3 d-md-flex justify-content-md-end mt-3">
            <a href="index.php" class="text-ligth" ><button class="btn btn-primary text-ligth"> Annuler </button></a>
            <button class="btn btn-primary" type="send" name="send" value="">Reserver</button>
        </div>
    </form>
    </div>
    </div>
      <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Hair-Palace</h3>
        <p>
          TOGO <br>
         Lomé<br>
         <br><br>
          <strong>Phone:</strong> +228 93000000<br>
          <strong>Email:</strong> hairpalace@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">A propos de nous</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
        </ul>
      </div>

   

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>hairpalace</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>