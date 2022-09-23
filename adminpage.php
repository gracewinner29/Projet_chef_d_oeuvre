

<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
  
//Recuperation

    $insertUser = $bdd->prepare('SELECT * FROM reservation_clients');
    $insertUser->execute();
    $recupReservations= $insertUser->fetchAll();

    // var_dump($recupReservations)


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- NAV BAR -->
<nav class="navbar navbar-expand-lg bg-dark p-5 ">
  <div class="container-fluid " >
    <a class="navbar-brand  " href="#" >Hair-Palace</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
     
    </div>
  </div>
</nav>
<!-- fin nav bar -->
<div class="container p-4">
<table class="table ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Salon</th>
      <th scope="col">Date de Reservation</th>
      <th scope="col">Heure de reservation</th>
      <th scope="col">Num</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($recupReservations as $reservation) :?>
    <tr>
    
      <td scope="row"> <?php $reservation['id'] ?></td>
      <td><?php echo $reservation['id']?></td>
      <td><?php echo $reservation['nom']?></td>
      <td><?php echo $reservation['prenom']?></td>
      <td><?php echo $reservation['mail']?></td>
      <td><?php echo $reservation['salon']?></td>
      <td><?php echo $reservation['jour']?></td>
      <td><?php echo $reservation['heure']?></td>
      <td><?php echo $reservation['num']?></td>

      <td> 
        <a href="delete.php?id=<?php echo $reservation['id'];?>">
              <i class="bi bi-trash3-fill"></i>
      </a>           
</td>

    </tr>
    <?php endforeach?>
    
  </tbody>
</table>

</div>

</body>
</html>
