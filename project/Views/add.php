<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add student</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>Add student</h1>
			<form action="../Controllers/StudentController.php?action=create" method="post">
				<div class="form-group">
					<label>Code</label>
					<input type="text" name="code" class="form-control">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Age</label>
					<input type="text" name="age" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" value="Add student" class="btn btn-info">
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>	
	</body>
</html>