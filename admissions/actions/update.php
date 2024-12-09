<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id= $_POST['id'];
$quantity= $_POST['quantity'];
$price= $_POST['price'];
$article=$_POST['article'];
$articles = $pdo->query("UPDATE admissions SET quantity='$quantity', price='$price', article='$article' WHERE id=" . $id);
header('Location: /admissions');

