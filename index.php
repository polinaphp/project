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
</head>
<body>
<style>
    .parent {
        display: flex;
        justify-content: center;
    }
  body {
        background-color: #e4c8d7;
    }
    button {
        margin: 5px;
        border-radius: 20px;
        background-color: antiquewhite;
        padding: 10px;
    }
</style>
<br>
<div class="parent">
    <div class="child">
<a href="/products"><button>Таблица товаров</button></a>
<br>
<a href="/list.php"><button>Список товаров</button></a>
    </div>
</div>
</body>
</html>