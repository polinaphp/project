<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id= $_POST['id'];
$quantity= $_POST['quantity'];
$product_id= $_POST['product_id'];
$date= $_POST['date'];
$pdo->query("INSERT INTO admissions(quantity, product_id, date) VALUES ('$quantity', '$product_id', '$date')");

header('Location: /admissions/');