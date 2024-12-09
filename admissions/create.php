<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$admissions = $pdo->query('SELECT * FROM admissions')
    ->fetchAll(PDO::FETCH_ASSOC);
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
<form action="/admissions/actions/store.php" method="post">
    <input type="hidden" name="id" id="id">
    <p>Quantity:</p>
    <input type="text" name="quantity" id="quantity" placeholder="quantity">
    <p>Product:</p>
    <select name="product">
        <?php foreach($products as $product):?>
            <option value="<?=$product['id']?>"><?=$product['name']?></option>
        <?php endforeach; ?>
    </select>
    <p>Date:</p>
    <input type="text" name="date" id="date" placeholder="date">
    <input type="submit" name="Отправить" id="btn2">
</form>
</body>
</html>
