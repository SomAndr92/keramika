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
    <title>Добавление нового товара</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?include "header.php"?>
<div class="container">  
 <div  class="row justify-content-md-center fs-2"> Добавление нового товара</div>
<form method="post" class="row  gy-1" enctype="multipart/form-data">
<div class="col-md-4">

  <label for="category">Выберите категорию:</label>
  <select id="category" name="category" onchange="handleCategoryChange()" class="form-control col-md-4">
    <option >Напольная плитка</option>
    <option >Плитка для ванной</option>
    <option >Для кухни</option>
    <option >Затирка</option>
  </select>

</div>
<div class="col-md-8"> </div>

<div class="col-md-4">
<input type="text" class="form-control col-md-4" name="name" placeholder='Наименование' required>
</div>
<div class="col-md-4">
<input type="text" class="form-control col-md-4" name="price" placeholder='Цена' required>
</div>
<div class="col-md-4">
<input type="text" class="form-control col-md-4" name="country" placeholder='Страна производства' required>
</div>
<div class="col-md-12">
<textarea type="text" class="form-control" name="opisaniye" aria-label="Имя" rows="5" required> </textarea>
</div>
<div class="col-md-12">   
<input type="file" class="form-control" name="photo" required>
</div>

<div class="col-md-12">   
Поля необязательные к заполнению
</div>
<div class="col-md-3">
<input type="text" class="form-control col-md-4" name="width" placeholder='Ширина*' >
</div>

<div class="col-md-3">
<input type="text" class="form-control col-md-4" name="length" placeholder='Длина*' >
</div>

<div class="col-md-3">
<input type="text" class="form-control col-md-4" name="tolshchina" placeholder='Толщина*' >
</div>
<div class="col-md-3">
<input type="text" class="form-control col-md-4" name="weight" placeholder='Вес*'>
</div>

<div class="col-md-4">
<input type="submit" class="btn btn-outline-primary" value="Добавить" name="auth">
</div>
</form>

<?
if ($_POST['auth']) {

$category=$_POST['category'];    
$name = $_POST['name'];
$price = $_POST['price'];
$country = $_POST['country'];
$opisaniye = $_POST['opisaniye'];


$width=$_POST['width'];    
$length = $_POST['length'];
$tolshchina = $_POST['tolshchina'];
$weight = $_POST['weight'];

if(empty($_POST['weight'])) {
    $width = 0;
}

if(empty($_POST['length'])) {
    $length = 0;
}


if(empty($_POST['tolshchina'])) {
    $tolshchina = 0;
}


if(empty($_POST['weight'])) {
    $weight = 0;
}




if (!empty($name) and !empty($price) and !empty($category) and !empty($opisaniye)) {
    $db = dbconn();
        $uploaddir = 'фото/напольная плитка/';
    $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo 'фото добавлено ';
      } else {
          echo "фото не добавлено ";
      }
        $query = $db->query("INSERT INTO `product`(`Категория`,`Наименование`, `Цена`, `Описание`, `Страна производства`,`Фото главное`,`Ширина`,`Длина`,`Толщина`,`Вес`) 
                                            VALUES ('$category','$name',       '$price','$opisaniye','$country',  '$uploadfile','$width' ,'$length','$tolshchina','$weight')");  
        //проверка на не совпадение товаров
        if($query) 
        {
            echo 'Товар добавлен';
        } else{
            echo 'Такой товар уже существует';
        }      
    }
}


?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
