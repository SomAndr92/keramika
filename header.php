<nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark" >
  <div class="container">
    <a class="navbar-brand" href="main.php">КЕРАМИКА</a>
   <? if(!empty($_SESSION['login'])){?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
          <span class="navbar-toggler-icon"></span>
        </button> 
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex align-items-center ">
            <a class="nav-link text-light me-4" href="#about_us">О нас</a>
            <li class="nav-item  dropdown text-light me-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Продукция
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Бесконтактаная мойка</a></li>
                <li><a class="dropdown-item" href="#">Пылесос салона</a></li>
                <li><a class="dropdown-item" href="#">Очистка дисков от нагара</a></li>
              </ul>
            </li>
            <a class="nav-link text-light me-4" href="#">Каталог</a>
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