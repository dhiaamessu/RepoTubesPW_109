<?php  
$error = "";
if (isset($_POST['submit'])) {
	if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
		header('Location: admin.php');
	} else {
		$error = 'username / password salah!';
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
</head>
<style>
	body{
		background-color: #ffeafa;
	}
	.container{
		width: 300px;
		height: 400px;
		background-color: #ffd8f7;
		margin: 80px auto;
		text-align: center;
		padding-top: 15px;
		font-family: arial;

	}
	h3{
		font-size: 56px;
		color:#820166;
		
	}
	table{
		margin: auto;
		padding-top: 15px;
		padding-bottom: 30px;
		color: #820166;
		font-weight: bold;
	}
	p{
		color: red;
	}
	button{
		padding: 10px;
		background-color: #51434e;
		color: #fff;
	}
</style>
<body>
	<div class="container">
		<h3>LOG IN</h3>
		<form action="" method="post">
			<p><?php echo $error;?></p>
			<table border="0">
				<tr>
				<td>
					<label for="username">Username :</label>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password :</label>
					<input type="password" name="password">
				</td>
			</tr>
		</table>
		<button type="submit" name="submit">Login</button>
		</form>
		<br>
		<br>
		<i>login : admin / admin</i>
	</div>
	
</body>
</html>