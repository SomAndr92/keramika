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
<?include "header.php"?>


<div class="p-5 text-start bg-image d-flex align-items-center fon1">
    <div class="mask m-auto p-3 container ">
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
        <div class="text-secondary mt-2">Весь Товар, который приобретен в нашем магазине, 
          имеет всю разрешающую документацию (сертификаты соответствия, регистрационные удостоверения, гарантийные талоны и др.), предусмотренную действующим законодательством РФ.</div>
      </div>
      <div class="item mt-3">
        <div> <i class="fa-regular fa-comments fa-2xl" style="color: black;"></i></div>
        <div class="fw-bold fs-4 mt-2">Тысячи довольных клиентов</div>
        <div class="text-secondary mt-2">У нас более 1000 довольных клиентов и столько же положительных отзывов и новых друзей</div>
      </div>
      <div class="item mt-3">
        <div> <i class="fa-regular fa-thumbs-up fa-2xl" style="color: black ;"></i></div>
        <div class="fw-bold fs-4 mt-2">100% гарантия качества </div>
        <div class="text-secondary mt-2">В нашем ассортименте присутствуют только оригинальные Товары. Мы не торгуем подделками, репликами, контрафактной продукцией, или любой другой, 
          происхождение которой вызывает сомнения.</div>
      </div>

    </div>
  </div>

  <div class="container  mt-4">
    <div class="box_big">

    <div class="box1">
        <img src="фото/ванна3.jpg" class="img1" alt="">
      </div>
      <div class="box1 d-flex flex-column mb-3">
        <div class="box1"> 
        <img src="фото/ванна_маленькая.jpg" class="img1" alt="">
        </div>
        <div class="fs-1 fw-bold text-start">Как выбрать керамическую плитку?</div>
        <div class="p-2 text-start text-secondary">Преимуществами керамической плитки являются такие 
          ее качества, как  долговечность, универсальность, простота в уходе и, конечно, эстетический вид. 
          Сегодня компаний, производящих плитку, великое множество, разнообразны также коллекции керамической 
          плитки, поэтому выбор и покупка превращается в сложную  задачу. Как же не ошибиться в выборе этого 
          отделочного материала? И по каким критериям ее выбирать?</div>
        <a href="https://rkeramika.ru/stati/kak-vybrat-plitku/" >
        <button type="button" class="btn btn-secondary">Подробнее о выборе</button>
        </a>
      </div>
   

    </div>
  </div>
  <div class="p-5 text-start bg-image d-flex align-items-center mt-5 fon2">
    <div class="mask m-auto p-3 container ">
      <div class="d-flex  h-100">
        <div class="text-white">
          <h1 class="mb-3 fw-bold" id="about_us">О компании Керамика</h1>
          <h3 class="mb-3 ">Более 1200 коллекций, 255 фабрик, 30 000 наименований плитки по оптовым ценам.</h3>
          <h6 class="mb-3 lh-base">Компания Люкс Керамика рада предложить свой многолетний опыт работы с 
            облицовочными материалами, широкий выбор изысканной, стильной и качественной керамической 
            плитки, керамогранита и мозаики ведущих производителей Италии, Испании и Португалии. 
            Представленный у нас материал непременно украсит Ваш дом или квартиру и идеально впишется в 
            интерьер.
            <br>
            <br>
            Обратившись к нам, Вы гарантированно купите высококачественную керамическую плитку, отвечающую 
            Вашим потребностям и на выгодных условиях, а мы постараемся сделать так, чтобы покупка плитки 
            была максимально удобной и доставила Вам удовольствие.
            <br>
            <br>
            Искренне будем рады видеть Вас в числе наших клиентов!</h6>
          
        </div>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
