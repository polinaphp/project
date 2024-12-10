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
    button {
        margin: 5px;
        border-radius: 20px;
        background-color: antiquewhite;
    }
    body {
        background-color: #e4c8d7;
    }
    table, th, td {
        border-collapse: collapse;
        border: 2px solid black;
    }
</style>
<h1>Список товаров</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Name</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['name']?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<br>
<a href="/index.php"><button>На главную</button></a>
</body>
</html>