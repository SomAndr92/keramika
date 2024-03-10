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
    <title>Карточка товара</title>
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
                <div> <?echo $row['Цена'].'<br>';?></div>
                <div><button class="btn btn-success mt-2">Купить</button></div>
              </div>
              <div class="book"> 
                 <p><span>Страна производства</span><span><?echo $row['Страна производства'].'<br>';?></span></p>
                 <p><span>2. Кульминация</span><span>стр. 10</span></p>
                 <p><span>3. Развязка</span><span>стр. 100</span></p>
                 <p><span>Послесловие</span><span></span></p>
                  
              </div>

              <div > <?echo $row['Страна производства'].'<br>';?></div>
              <div class="mt-3" > 
                <div class="name_small mb-2">Описание</div> 
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


<!--
    .book {
  width: 250px;
}
p {
    overflow: hidden;
}
p:after {  content:'..................................................';
  display: block;
  white-space: nowrap;
  overflow: hidden;
}
p span:first-of-type {
  float:left;
  margin-right: 10px;
}
p span:last-of-type {
  float:right;
  margin-left: 10px;
}

p:last-of-type{
  margin-left: 20px;
}
<div class="book">
  <h1>Оглавление</h1>
  <p><span>Предисловие</span><span></span></p>
  <p><span>1. Завязка</span><span>стр. 1</span></p>
  <p><span>2. Кульминация</span><span>стр. 10</span></p>
  <p><span>3. Развязка</span><span>стр. 100</span></p>
  <p><span>Послесловие</span><span></span></p>
  <p><span>Об авторе</span><span></span></p>
</div>
-->