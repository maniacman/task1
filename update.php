<?php
$id = $_GET['id'];
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$name = ($_POST['filename']);
if ($username && $email && $password){
	if ($_FILES['image']['name']) {
		$fileToDelite = $name;
		$name = uploadImage($_FILES['image']);
		if ($fileToDelite) {
			$path = 'uploads/' . $fileToDelite;
			unlink($path);
		}
	}	
	$pdo = new PDO('mysql:host=localhost;dbname=users_learning;charset=utf8;', 'root', '');
	$query = $pdo->prepare("UPDATE users SET username = :username, email = :email, password = :password, filename = :filename WHERE id = :id");
	$values = ['username' => $username, 'email' => $email, 'password' => $password, 'filename' => $name, 'id' => $id];
	$query->execute($values);	
	header('Location: index.php');
} else {
	echo "Заполните все поля";
}

function uploadImage($image)
{
	$path = 'uploads';
	$extension = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
	$filename = DFileHelper::getRandomFileName($path, $extension);
	$target = $path . '/' . $filename . '.' . $extension;
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
	$name = $filename . '.' . $extension;
	return $name;
}

class DFileHelper
{
	public static function getRandomFileName($path, $extension='')
	{
		$extension = $extension ? '.' . $extension : '';
		$path = $path ? $path . '/' : '';

		do {
			$name = md5(microtime() . rand(0, 9999));
			$file = $path . $name . $extension;
		} while (file_exists($file));

		return $name;
	}
}