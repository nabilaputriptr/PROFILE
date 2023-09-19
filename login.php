<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background-image: url(img/ko.jpg);
		background-size: cover;
		}
		.login{
		
			width: 40%;
			height: 300px;
			margin: 100px auto;
			border: 2px solid black;
			text-align: center;
			padding: 50px;
			box-shadow: 0 0 2px 2px orange;
		}.logins{
			margin-top: -20px;
		}
		.login input,.login button{
			margin-bottom: 20px;
			width: 60%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid black;
		}
		.login button{
			margin: auto;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 20px;
			width: 60%;
			padding: 20px;
			background-color: cornflowerblue;
			border-radius: 10px;
			font-size: 18px;
			text-align: center;
		}.login h2{
			font-size: 34px;
		}span{
			color: blueviolet;
		}h3{
			margin-top: -15px;
		}
	</style>
</head>
<body>
	<?php 
	if(isset($_POST["submit"])){
		//seleksi
		if($_POST["nama"]=="admin" && $_POST["password"]=="123"){
			//loncat
			header("Location:index.html");
			exit;
		}else{
			$error=true;
		}
	}
	?>
	<div class="login">
		<div class="logins">
			<?php if(isset($error)) :?>
				<h3>Password Salah!!</h3>
				<?php endif;?>
		<h2>Login</h2>
		<form action="" method="post">
			<!-- <label for="email">Email</label> -->
			<input type="text" name="nama" id="text" placeholder="Name"><br>
			<!-- <label for="pw">Password</label> -->
			<input type="password" name="password" id="pw" placeholder="Password"><br>
			<button type="submit" name="submit">Login</button><br>
			<h3>Masukan password! <span>Masuk</span></h3>
		</form>
	</div>
</div>
</body>
</html>