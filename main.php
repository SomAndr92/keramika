<?
session_start();
 
include 'dbconnect.php';

if ($_POST['exit']) {
        if($_SESSION['auth'] == true){    
        header('Location: /desroy.php');
}
}

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark" >
  <div class="container">
    <a class="navbar-brand">КЕРАМИКА</a>
   <? if(!empty($_SESSION['login'])){?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
          <span class="navbar-toggler-icon"></span>
        </button> 
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex align-items-center ">
            <a class="nav-link text-light me-4" href="#">О нас</a>
            <li class="nav-item  dropdown text-light me-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Услуги
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Бесконтактаная мойка</a></li>
                <li><a class="dropdown-item" href="#">Пылесос салона</a></li>
                <li><a class="dropdown-item" href="#">Очистка дисков от нагара</a></li>
              </ul>
            </li>
            <a class="nav-link text-light me-4" href="#">Клубная карта</a>
            <a class="nav-link text-light me-4" href="#">Отзывы</a>
            <a class="nav-link text-light me-4" href="#">Контакты</a>
            <a class="nav-link text-light me-4" href="#"> <form method="post" class="d-flex align-items-center" >
    
    <div class="me-2 text-light">
    <i class="fa-solid fa-user fa-lg" style="color: green;"></i>
    
      <?  echo $_SESSION['login'];
      
    ?>
    
  </div>
    
    <input class="btn btn-outline-warning" type="submit" name="exit" value="Выход">
  </form></a>
          </div>
        </div>    
   
    <?
}?>
  </div>
</nav>  
<div class="container"> 
<div class="row">


Главная страница

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
