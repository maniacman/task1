<?php
$id = $_GET['id'];
$pdo = new PDO('mysql:host=localhost;dbname=users_learning;charset=utf8;', 'root', '');
$query = $pdo->prepare("DELETE FROM users WHERE id = :id");
$values = ['id' => $id];

$sql = "SELECT * FROM users WHERE id = $id";
$statement = $pdo->query($sql);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
$filename = $users[0][filename];
if ($filename != '') 
{
$path = 'uploads/' . $filename;
unlink($path);
}
$query->execute($values);
header('Location: index.php');