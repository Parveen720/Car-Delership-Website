<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Now</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public\css\style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>




<div style="margin-left:200px; padding-left:330px;margin-top: 00px; font-size:20px; padding-top:20px;" class="container">
	<div class="row col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h1 style="margin-top: 50px;">BOOK YOUR CAR</h1>
			</div>
			<div class="panel-body">
				<form action ="config\config1.php" method="post">
					<div class="form-group">
						<label for="car"></label>Car
						<input type="text" class="form-control" id="firstName" name="car" />
					</div>
					<div class="form-group">
						<label for="carmodel">Car Model</label>
						<input type="text" class="form-control" id="lastName" name="carmodel" />
					</div>
					<div class="form-group">
						<label for="yourname">date</label>
						<input type="DATE" class="form-control" id="lastName" name="yourname" />
					</div>
					<div  class="form-group">
						<label for="gender">Gender</label>
						<div>
                          <label style="padding-left: 10px;" for="male" class="radio-inline"><input value="m" type="radio" name="gender" id="male"/>Male</label>
                          <label style="padding-left: 10px;" for="female" class="radio-inline"><input value="f" type="radio" name="gender" id="female"/>Female</label>
                          <label style="padding-left: 10px;" for="others" class="radio-inline"><input value="o" type="radio" name="gender" id="others"/>Others</label>
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" name="email" />
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password" />
					</div>
					<div class="form-group">
						<label for="number">Phone Number:</label>
						<input type="number" class="form-control" id="number" name="number" />
					</div>
					<div class="form-group">
						<label for="youraddress">Your Address</label>
						<input type="text" class="form-control" id="number" name="youraddress" />
					</div>
					<input style="margin-top:40px;" type="submit" class="btn btn-primary w-100"/>
				</form>
			</div>
			<div class="panel-footer text-center">
				<small>&copy;FROM SAHAYAK</small>
			</div>
		</div>
	</div>
</div>




</body>
</html>