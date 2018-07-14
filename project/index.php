<?php
session_start();
require_once 'Models/Student.php';
$studentList = Student::list();
include 'Views/home.php';