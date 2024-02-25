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
    <title>Напольные покрытия</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
<?include "header.php"?>

<div class="container text-center"> 
<div class="mt-2 mb-3"><h1>Напольные покрытия</h1></div>
<div class="d-flex flex-wrap mb-3 gap-3 justify-content-between ">


<?php

        $db = dbconn();
            
            $query = $db->query("SELECT * FROM `product`");
            
            while($row=$query->fetch_assoc())
            { if ($row['Категория']=='Напольная плитка'){
            ?>
            <div class="col-3 h-100 ">
            <img src="<?=$row['Фото главное']?>" alt="" class="jpgr">
            <br>
                <?=$row['Наименование']?>
                <br>
            <a href ="user.php?id=<?=$row['id']?>" class="btn btn-primary">Подробнее</a>
            </div>
            <?
            }
        }
           /* if($_SESSION['role'] == 'admin'){?>
                <a href ="new_prod.php?id=<?=$row['id']?>" class="btn btn-outline-success box-btn gy-2">Добавить новый товар <br>  <i class="fa-regular fa-square-plus fa-2xl mt-4"></i></a> <?
           }*/
        
?>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>