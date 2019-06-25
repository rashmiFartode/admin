<?php 
	include('includes/config.php');
	if (isset($_POST['submit'])) {
		$query="INSERT INTO `register` (`name`, `email`, `password`, `number`, `address`, `photo`, `created`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['number']."', '".$_POST['address']."', '".$_POST['photo']."', NOW())";
		$insert=mysqli_query($con,$query);
		if ($insert) {
			echo "registered successfully";
		}
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<style>

		body
		{
			background: #ff9966; /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #ff9966, #ff5e62); /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #ff9966, #ff5e62); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: white;	
		}
		.text-center
		{
			text-align: center;
		}
		.container
		{
			display: block;
			margin:0 auto;
			padding: 10px 15px;
		}
		.user-register
		{
			display: block;
		    width: 40%;
		    /* height: 100%; */
		    margin: auto auto;
		    padding: 4rem;
		    background: rgba(255,103,50,0.3);
		    border: 2px dashed white;
		}
		input[type="text"],input[type="password"],input[type="email"],input[type="number"],input[type="file"]
		{
			display: block;
			padding: 2px;
			border:gray;
			border-radius: 2px;
			height: 25px;
			width: 100%;

		}
		textarea
		{
			display: block;
			padding: 2px;
			border:gray;
			border-radius: 2px;
			width: 100%;
		}
		label
		{
			color: white;
			font-weight: bolder;
			font-size: 16px;
			margin-bottom: 0.5rem;
			text-transform: capitalize;
		}
		.form-group
		{
			margin-bottom: 0.5rem;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="user-register">
			<form method="post">
				<div class="">
				<h2>LOGIN</h2>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" maxlength="50" minlength="5" required="">
				</div>

				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" id="email"  maxlength="50" minlength="5" required="">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password"  maxlength="50" minlength="5" required="">
				</div>
				<div class="form-group">
					<label for="number">Mobile no</label>
					<input type="number" name="number" id="number"  maxlength="10" minlength="10" required="">
				</div>
				<div class="form-group">
					<label for="address">address</label>
					<textarea cols="13" rows="5" name="address" id="address" required=""></textarea>
				</div>
				
				<div class="form-group">
					<label for="photo">photo</label>
					<input type="file" name="photo" id="photo" required="">
				</div>
				<input type="submit" name="submit" value="register">
			</form>
		</div>
	</div>
</body>
</html>