<!DOCTYPE html>
<html>
<head>
	<title>Login and Reg</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login</h2>
			<form action="val.php" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email"class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password"class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login</button>
			</form>

	</div>
	<div class="col-md-6 login-right" >
		<h2>Register here</h2>
			<form action="reg.php" method="post">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname"class="form-control" required>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname"class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-group">
					<label>Address</label>
					<input type="text" name="adress"class="form-control" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email"class="form-control" 
                     pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile"class="form-control" 
                      required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password"class="form-control" minlength="6" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
</div>
</div>
	</div>
</body>
</html>