<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>List student</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>List student</h1>
			<table class="table table-dark table-striped">
				<tr>
					<th>Code</th>
					<th>View</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php foreach ($studentList  as $key => $student): ?>
					<tr>
						<td><?php echo $student['code'] ?></td>
						<td><a href="Controllers/StudentController.php?action=view&id=<?php echo $key?>" class="btn btn-success">View</a></td>
						<td><a href="Controllers/StudentController.php?action=edit&id=<?php echo $key?>" class="btn btn-warning">Edit</a></td>
						<td><a href="Controllers/StudentController.php?action=delete&id=<?php echo $key?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</table>
			<a href="Controllers/StudentController.php?action=add" class="btn btn-primary">Add student</a>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>	
	</body>
</html>