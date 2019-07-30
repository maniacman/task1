<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<?php
	$id = $_GET['id'];
	$pdo = new PDO('mysql:host=localhost;dbname=users_learning;charset=utf8;', 'root', ''); 
	$sql = "SELECT * FROM users WHERE id = $id";
	$statement = $pdo->query($sql);
	$users = $statement->fetchAll(PDO::FETCH_ASSOC);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Edit User ID <?php echo $id;?></h1>
				<form action="update.php?id=<?php echo $id;?>&pro=edit" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $users[0][username];?>">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" value="<?php echo $users[0][email];?>">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password"class="form-control" value="<?php echo $users[0][password];?>">
					</div>
					<div class="form-group">
						<input type="file" name="image">
					</div>
					<input type="hidden" name="filename" value="<?php echo $users[0][filename];?>">
					<div class="form-group">
						<button type="submit" class="btn btn-warning">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>