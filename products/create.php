<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$products = $pdo->query('SELECT * FROM products')
    ->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='/style.css' />
</head>
<body>
<h1>Добавить запись</h1>
<form action="/products/actions/store.php" method="post">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="price" id="price" placeholder="price">
    <input type="text" name="article" id="article" placeholder="article">
    <input type="submit" name="Отправить" id="btn1">
</form>
</body>
</html>