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
<h1>Добавить запись</h1>
<form action="/admin/admissions/actions/store.php" method="post">
    <input type="text" name="quantity" id="quantity">
    <input type="text" name="product_id" id="product_id">
    <input type="date" name="date" id="date">
    <input type="submit" name="Отправить" id="btn4">
</form>
</body>
</html><?php