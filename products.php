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

<div class="container text-center contan"> 
<!-- <div class="mt-2 mb-3"><h1>Напольные покрытия</h1></div> -->

<div class="row justify-content-evenly">

<?php
if($_GET)
{
        $id = $_GET['id'];
        $db = dbconn();
            
            $query = $db->query("SELECT * FROM `product` WHERE `id_categories`='$id'");
            
            while($row=$query->fetch_assoc())
            { ?>
            
                <div class="box_list gy-2 ">
                <a href ="card.php?id=<?=$row['ID']?>" class="a_href" >
                <div class="scale"> <img src="<?=$row['Фото главное']?>" alt="" class="scale jpg_cat "></div>
                   <div > <?=$row['Наименование']?></div>
                    <div class="text_price"> <?=$row['Цена']?></div>
                <div class="btn btn-secondary">Подробнее</div></a>
    </div> <?
            
                     
        }
        include 'new_tovar.php';
    }     
?>
</div>
</div>
<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
