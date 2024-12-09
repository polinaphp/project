<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$admissions = $pdo->query('SELECT * FROM admissions')
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
<h1>Поступление</h1>
<table>
    <thead>
    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Products</td>
        <td>Date</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($admissions as $admission): ?>
        <tr>
            <td><?=$admission['id']?></td>
            <td><?=$admission['name']?></td>
            <td><?=$admission['product_id']?></td>
            <td><?=$admission['date']?></td>
            <td class="r"><a href="/admissions/edit.php?id=<?=$admission['id']?>">Редактировать</a></td>
            <td class="r"><a href="/admissions/actions/delete.php?id=<?=$admission['id']?>"><button id="delete">Удалить</button></a></td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>
<p></p>
<a href="/admissions/create.php"><button>Добавить</button></a>
</table>
<a href="/products"><button>Товары</button></a>
</body>
</html>