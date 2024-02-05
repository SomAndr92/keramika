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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

            <li class="nav-item  dropdown text-light me-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user fa-lg" style="color: green;"></i>
              </a>
              <ul class="dropdown-menu">
              <a class="nav-link text-light me-4" href="#"> <form method="post" class="d-flex flex-column align-items-center" >
    
                    <div class="me-2 text-light">

                      <?  echo $_SESSION['login'];
                    ?>
                  </div>

                    <input class="btn btn-outline-warning" type="submit" name="exit" value="Выход">
                  </form></a>
              </ul>
            </li>
<!--
            <a class="nav-link text-light me-4" href="#"> <form method="post" class="d-flex align-items-center" >
    
    <div class="me-2 text-light">
    <i class="fa-solid fa-user fa-lg" style="color: green;"></i>
    
      <?  echo $_SESSION['login'];
      
    ?>
    
  </div>
    
    <input class="btn btn-outline-warning" type="submit" name="exit" value="Выход">
  </form></a>
   -->
          </div>
        </div>    
   
    <?
}?>
  </div>
</nav>  


<div class="p-5 text-start bg-image d-flex align-items-center fon1">
    <div class="mask m-auto w-75 p-3 ">
      <div class="d-flex  h-100">
        <div class="text-white">
          <h1 class="mb-3 fw-bold">Керамическая плитка высокого качества</h1>
          <h3 class="mb-3 ">от ведущих производителей</h3>
          <h6 class="mb-3 ">Скидка на керамическую плитку для кухни - 50% до конца апреля - 
            успейте заказать выгодно!</h6>
          
        </div>
      </div>
    </div>
  </div>

  <div class="container  mt-5">
    <div class="fs-5 text-secondary font-monospace">НАДЕЖНОСТЬ</div>
    <div class="fs-1">Почему нам можно доверять</div>
    <div class=" d-flex flex-row mb-3 justify-content-between item_text mt-5">

      <div class="item mt-3">
        <div> <i class="fa-solid fa-certificate fa-2xl" style="color: black;"></i>
</div>
        <div class="fw-bold fs-4 mt-2">Весь товар сертифицирован</div>
        <div class="text-secondary mt-2">Мы ценим время наших клиентов, имеем большой опыт работы с автомобилями
          различных марок и моделей</div>
      </div>
      <div class="item mt-3">
        <div> <i class="fa-regular fa-comments fa-2xl" style="color: black;"></i></div>
        <div class="fw-bold fs-4 mt-2">Тысячи довольных клиентов</div>
        <div class="text-secondary mt-2">Мы не экономим на автохимии, расходниках и оборудовании, вы не увидите следы
          коррозии на хромированных деталях кузова, разводы и оставшуюся грязь</div>
      </div>
      <div class="item mt-3">
        <div> <i class="fa-regular fa-thumbs-up fa-2xl" style="color: black ;"></i></div>
        <div class="fw-bold fs-4 mt-2">100% гарантия качества </div>
        <div class="text-secondary mt-2">Мы стремимся сделать наши услуги максимально доступными и предлагаем золотую
          середину между качеством и ценой</div>
      </div>



    </div>
  </div>

  <div class="container  mt-4">
    <div class="box_big">

    <div class="box1  ">
        <img src="фото/ванна3.jpg" class="img1" alt="">
      </div>
      <div class="box1 d-flex flex-column mb-3">
        <div class="fs-1 fw-bold text-start">О нас</div>
        <div class="p-2 text-start text-secondary">Мы предлагаем широкий спектр услуг, который включает комплексную
          ручную и бесконтактную мойку, чистку багажника, а также уход за арками, фонарями, бамперами и прочими частями
          авто. Наши специалисты используют только высокотехнологичные составы и современные методики, что гарантирует
          высокое качество оказываемых услуг. Вас приятно удивят цены на мойку автомобиля, внимательный подход к
          клиентам и удобный график работы.</div>
        <div class="p-2 fs-3 fw-bold text-start">Звоните: +1(23)-45-67-890</div>
      </div>
      

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
