<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Add User</h1>
				<form action="create.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="file" name="image">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>