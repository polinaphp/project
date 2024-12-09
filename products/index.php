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
<p></p>
<h1>Товары</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Price</td>
        <td>Article</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['price']?></td>
            <td><?=$product['article']?></td>
            <td><?=$product['quantity']?></td>
            <td class="r"><a href="/products/edit.php?id=<?=$product['id']?>">Редактировать</a></td>
            <td class="r"><a href="/products/actions/delete.php?id=<?=$product['id']?>"><button id="delete">Удалить</button></a></td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>
<p></p>
<a href="/products/create.php"><button>Добавить</button></a>
</table>
<a href="/admissions"><button>Поступление</button></a>
</body>
</html>