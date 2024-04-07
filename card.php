<?
session_start();
 
include 'dbconnect.php';

if ($_POST['exit']) {
        if($_SESSION['auth'] == true){    
        header('Location: /desroy.php');
}
}
/*добавили*/
if ($_POST['bask']) {

  $arr = [
    "name"=>$_POST['product_name'],
    "photo"=>$_POST['product_photo'],
    "price"=>$_POST['product_price'],
    "count" => 1
  ];

  if($_SESSION['basket'] == null) {
    $_SESSION['basket'] = [];
  } 
    array_push($_SESSION['basket'], $arr);
  

  $user = $_SESSION['login'];

    /*var_dump($_SESSION['basket']);*/
  
      }
 /*вот до сюда*/

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточка товара</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
<?include "header.php"?>

<div class="container mt-5 contan"> 
    
<div class="row">


<?php
if($_GET)
{
        $id = $_GET['id'];
        $db = dbconn();
            $query = $db->query("SELECT * FROM `product` WHERE `id`='$id'");
            while($row=$query->fetch_assoc())
            {
            ?>
            
          <!-- ($_POST['bask'])-->  <form method="post" class="row  gy-1" enctype="multipart/form-data">

<!-- ($_POST['bask'])-->
              <input type="text" hidden name="product_name" value="<?=$row['Наименование']?>">
              <input type="text" hidden name="product_photo" value="<?=$row['Фото главное']?>">
              <input type="text" hidden name="product_price" value="<?=$row['Цена']?>">
<!-- ($_POST['bask'])-->              
            <div class="afisha">
            <div class="cardbox_img" name="product_image"> <img src="<?=$row['Фото главное']?>" class="jpg_cat" alt=""></div>
            <div class="cardbox_text">
            <div class="mb-3" name="product_name"><h2><?echo $row['Наименование'].'<br>';?></h2></div>
              <div class="small_box">
                <div class="text_pricecard"> <?echo $row['Цена'].'<br>';?></div>
<!-- ($_POST['bask'])-->     <div><input type="submit" class="btn btn-success mt-2" value="В корзину" name="bask"></div>
              </div>
              <div class="book"> 
                 <p><span>Страна производства</span><span><?echo $row['Страна производства'].'<br>';?></span></p>
                 <?
                 if (!empty($row['Ширина'])){ ?>
                 <p><span>Ширина, см</span><span><?echo $row['Ширина'].'<br>';?></span></p> <?}?>
                 <?
                 if (!empty($row['Длина'])){ ?>
                 <p><span>Длина, см</span><span><?echo $row['Длина'].'<br>';?></span></p> <?}?>
                 <?
                 if (!empty($row['Толщина'])){ ?>
                 <p><span>Толщина, мм</span><span><?echo $row['Толщина'].'<br>';?></span></p> <?}?>
                 <?
                 if (!empty($row['Вес'])){ ?>
                 <p><span>Вес, кг</span><span><?echo $row['Вес'].'<br>';?></span></p>  <?}?>

                  
              </div>

              <div > <?echo $row['Страна производства'].'<br>';?></div>
              <div class="mt-3" > 
                <div class="name_small mb-2"><h3>Описание</h3></div> 
               <?echo $row['Описание'].'<br>';?></div>
            </div>
            </div>

           
                 </form><!-- ($_POST['bask'])-->
            <?
            }
        }
        

?>
</div>
</div>
<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>


