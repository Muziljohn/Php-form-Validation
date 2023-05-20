<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form Validation in PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<div class="container mt-5">
		<h2 class="text-center mb-4">Form Validation </h2>
		<!-- Form validation script -->
		<?php include('Validation.php'); ?>
		<!-- Contact form -->
		<form action="" method="post" novalidate>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Name</label>
				<div class="col-sm-8">
					<input type="text" name="name" class="form-control">
					<!-- Error -->
					<?php echo $nameEmptyErr; ?>
					<?php echo $nameErr; ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="email" name="email" class="form-control">
					<!-- Error -->
					<?php echo $emailEmptyErr; ?>
					<?php echo $emailErr; ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Password</label>
				<div class="col-sm-8">
					<input type="password" name="password" class="form-control">
					<!-- Error -->
					<?php echo $passEmpyErr; ?>
					
				</div>
			</div>


			<div class="form-group row">
				<div class="col-sm-12 mt-3">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
			</div>
		</form>
	</div>
	</div>

</body>

</html>