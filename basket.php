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

<div class="container mt-5"> 
    
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
            
            
            <div class="afisha">
            <div class="cardbox_img"> <img src="<?=$row['Фото главное']?>" class="jpg_cat" alt=""></div>
            <div class="cardbox_text">
            <div class="mb-3"><h2><?echo $row['Наименование'].'<br>';?></h2></div>
              <div class="small_box">
                <div class="text_pricecard"> <?echo $row['Цена'].'<br>';?></div>
                <div><button class="btn btn-success mt-2">В корзину</button></div>
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
           
            
            <?
            }
        }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>


