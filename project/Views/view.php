<?php  
session_start();
require_once '../Models/Student.php';
$id = filter_input(INPUT_GET, 'id');
$studentView = Student::show($id);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Show student</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>Show student</h1>
			<ul>
				<li><?php echo 'Code: ' . $studentView['code'] ?></li>
				<li><?php echo 'Name: ' . $studentView['name'] ?></li>
				<li><?php echo 'Age: ' . $studentView['age'] ?></li>
				<li><?php echo 'Address: ' . $studentView['address'] ?></li>
				<li><?php echo 'Phone: ' . $studentView['phone'] ?></li>
			</ul>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>	
	</body>
</html>