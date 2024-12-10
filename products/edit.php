<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id= $_GET['id'];
$products = $pdo->query('SELECT * FROM products WHERE id= ' .$id)->fetch(PDO::FETCH_ASSOC);  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    button {
        margin: 5px;
        border-radius: 20px;
        background-color: antiquewhite;
    }
    body {
        background-color: #e4c8d7;
    }
    input {
        border-radius: 20px;
        padding: 5px;
    }
</style>
<form action="/products/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?=$products['id'] ?>">
    <p>Название:</p>
    <input name="name" type="text" value="<?=$products['name'] ?>">
    <p>Цена:</p>
    <input name="price" type="text" value="<?=$products['price'] ?>">
    <p>Артикул:</p>
    <input name="article" type="text" value="<?=$products['article'] ?>"><br>
    <button>Сохранить</button>
</form>
</body>
</html>

