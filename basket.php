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
    <title>Корзина</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
<?include "header.php"?>

<div class="container text-center contan"> 
<div class="mt-2 mb-3"><h1>Корзина</h1></div>
    
<div class="row">




<div class="d-flex justify-content-between mt-4 fon_basket fs-3">
<div class="jpg_basketmain">Фото</div>
<div class="name_basketmain">Наименование </div>
<div class="cou_basketmain">Количество</div>
<div class="jpg_basketmain">Цена</div>
</div>

<?php
if($_POST['countAdd']) {

  /*var_dump($_POST['arr_key']);*/
 /* var_dump($_SESSION['basket'][$_POST['arr_key']]['count']);*/
  $_SESSION['basket'][$_POST['arr_key']]['count'] = $_POST['new_count'];
}

if($_SESSION['basket'] != null) {
  $kol=0;
  $rezult=0;
  $arr=0;
  $x=0;
  foreach ($_SESSION['basket'] as $key=>$stuff) {
    if ($stuff['count']>0){
    
    ?>
    <div class="d-flex justify-content-between mt-4 fs-4">
    <div class="jpg_basketmain"><img src ="<?=$stuff['photo']?>" class="jpg_basket"></div>
    <div class="name_basketmain cent"><?=$stuff['name']?></div>
    
    <div class="d-flex justify-content-center cou_basketmain">
    <div class="cent"><?=$stuff['count']?></div>
    <div class="cent">
    <form method="post">
      <input type="text" hidden name = "arr_key" value="<?=$key?>">
      <input type="text" name = "new_count" class="col-5 " placeholder="количество">
      <input type="submit" name="countAdd" class="btn btn-secondary col-auto" value="добавить">
    </form></div>
  </div>
  <?
  $arr=explode('₽',$stuff['price']);

$x=(int)$arr[0]*$stuff['count'];
?>
    <div class="jpg_basketmain cent"><?=$x?> Руб</div>
    
  </div>
    <?

    $rezult=$rezult+$x;
    $kol=$kol+1;
  } }
  ?>
  <button class="d-flex justify-content-between btn btn-warning zakaz fs-4 mt-4 mb-4">
    <div class="jpg_basketmain "><?echo $kol;?>
    <? if ($kol == 1) {?> товар<?}
    else{
      if  ($kol <5) {?>товара<?}
      else{?>товаров<?}}?>
    </div>
    <div class="name_basketmain ">Заказать</div>
    <div class="jpg_basketmain ">Итого: <?echo $rezult;?> Руб</div>
    </button> 
<?}
?>
</div>
</div>

<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
