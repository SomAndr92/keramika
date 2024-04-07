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
    <title>Каталог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
<?include "header.php"?>

<div class="container text-center contan"> 
    <div class="mt-2 mb-3"><h1>Каталог продукции</h1></div>
<div class="row">


<?php

        $db = dbconn();
            
            $query = $db->query("SELECT * FROM `categories`");
            while($row=$query->fetch_assoc())
            {
            ?> 
            <div class="col-4 gy-2">
            <a href="products.php?id=<?=$row['ID']?>" class="text_cat">
            <img src="<?=$row['фото']?>" alt="" class="jpgr">
            <br>
                <?=$row['категория']?>
                
            </a>    
            </div>
            
            <?
            }
include 'plus_cat.php';
        
?>
</div>
</div>
<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
