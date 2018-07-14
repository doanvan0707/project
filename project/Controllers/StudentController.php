<?php
require_once '../Models/Student.php';
$action = filter_input(INPUT_POST, 'action') ? filter_input(INPUT_POST, 'action') : filter_input(INPUT_GET, 'action');

switch ($action) {
		case 'add':
				header('Location: ../Views/add.php');
				exit();
				break;
		case 'create':
				$code = filter_input(INPUT_POST, 'code');
				$name = filter_input(INPUT_POST, 'name');
				$age = filter_input(INPUT_POST, 'age');
				$address = filter_input(INPUT_POST, 'address');
				$phone = filter_input(INPUT_POST, 'phone');
				$student = new Student($code, $name, $age, $address, $phone);
				$student->create();
				header('Location: ../index.php');
				exit();
				break;
		case 'edit':
				$id = filter_input(INPUT_GET, 'id');
				header('Location: ../Views/edit.php?id=' . $id);
				exit();
				break;
		case 'update':
				$id = filter_input(INPUT_GET, 'id');
				$code = filter_input(INPUT_POST, 'code');
				$name = filter_input(INPUT_POST, 'name');
				$age = filter_input(INPUT_POST, 'age');
				$address = filter_input(INPUT_POST, 'address');
				$phone = filter_input(INPUT_POST, 'phone');
				$student = new Student($code, $name, $age, $address, $phone);
				$student->update($id);
				header('Location: ../index.php');
				exit();
				break;		
		case 'view':
				$id = filter_input(INPUT_GET, 'id');
				header('Location: ../Views/view.php?id=' . $id);
				exit();
				break;	
		case 'delete':
				$id = filter_input(INPUT_GET, 'id');
				$student = Student::delete($id);
				header('Location: ../index.php');
				exit();
				break;	
		default:
				header('Location: ../index.php');
				exit();			
}