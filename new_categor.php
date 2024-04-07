<?
session_start();
 
include 'dbconnect.php';


if ($_POST['auth']) {

$category=$_POST['category'];    



if (!empty($category)) {
    $db = dbconn();
        $uploaddir = 'фото/каталог/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo 'фото добавлено ';
      } else {
          echo "фото не добавлено ";
      }
        $query = $db->query("INSERT INTO `categories`(`категория`, `фото`) 
                                            VALUES ('$category','$uploadfile')");  
        //проверка на не совпадение категорий
        if($query) 
        {
            echo 'Товар добавлен';
        } else{
            echo 'Такой товар уже существует';
        }      
    }
}


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
    <title>Добавление новой категории</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?include "header.php"?>
<div class="container contan">  
 <div  class="row justify-content-md-center fs-2"> Добавление новой категории</div>
<form method="post" class="row  gy-1 d-flex flex-column align-items-center" enctype="multipart/form-data">

<div class="col-md-8"> </div>

<div class="col-md-10">
<input type="text" class="form-control col-md-4" name="category" placeholder='Категория*' required>
</div>

<div class="col-md-10">   
<input type="file" class="form-control" name="photo" required>
</div>



<div class="col-md-auto">
<input type="submit" class="btn btn-outline-primary" value="Добавить" name="auth">
</div>
</form>


</div>
<?include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
