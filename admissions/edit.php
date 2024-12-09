<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$id= $_GET['id'];
$admissions = $pdo->query('SELECT * FROM admissionsWHERE id= ' .$id)
    ->fetch(PDO::FETCH_ASSOC);

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
<form action="/admissions/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?=$admissions['id'] ?>">
    <p>Количество:</p>
    <input name="quantity" type="text" value="<?=$admissions['quantity'] ?>">
    <p>Цена:</p>
    <input name="price" type="text" value="<?=$admissions['product_id'] ?>">
    <p>Артикул:</p>
    <input name="article" type="text" value="<?=$admissions['date'] ?>">
    <br>
    <button>Сохранить</button>
</form>
</body>
</html>

