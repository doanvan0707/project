<?php
class Student 
{
		public $code;
		public $name;
		public $age;
		public $address;
		public $phone;

		function __construct($code, $name, $age, $address, $phone)
		{
				$this->code = $code;
				$this->name = $name;
				$this->age = $age;
				$this->address = $address;
				$this->phone = $phone;
				session_start();
		}

		public function setCode($code)
		{
				$this->code = $code;
		}

		public function getCode()
		{
				return $this->code;
		}

		public function setName($name)
		{
				$this->name = $name;
		}

		public function getName()
		{
				return $this->name;
		}

		public function setAge($age)
		{
				$this->age = $age;
		}

		public function getAge()
		{
				return $this->age;
		}

		public function setAddress($address)
		{
				$this->address = $address;
		}

		public function getAddress()
		{
				return $this->address;
		}

		public function setPhone($phone)
		{
				$this->phone = $phone;
		}

		public function getPhone()
		{
				return $this->phone;
		}

		public static function list()
		{
				if (empty($_SESSION['students'])) {
						$_SESSION['students'] = [];
				}
				$students = $_SESSION['students'];
				return $students;
		}

		public function create()
		{
				$student = [
						'code' => $this->code,
						'name' => $this->name,
						'age' => $this->age,
						'address' => $this->address,
						'phone' => $this->phone
				];
				$_SESSION['students'][] = $student;
		}
		public static function show($id)
		{
				return $_SESSION['students'][$id];
		}

		public function update($id) 
		{
				$student = [
						'code' => $this->code,
						'name' => $this->name,
						'age' => $this->age,
						'address' => $this->address,
						'phone' => $this->phone
				];
				$_SESSION['students'][$id] = $student;
		}

		public static function delete($id)
		{
				session_start();
				unset($_SESSION['students'][$id]);
		}
}