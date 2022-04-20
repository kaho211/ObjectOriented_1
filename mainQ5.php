<?php
require_once 'Classes\Cars\Cars.php';
require_once 'Classes\Cars\Honda.php';
require_once 'Classes\Cars\Nissan.php';
require_once 'Classes\Cars\Ferrari.php';
require_once 'Classes\Cars\Toyota.php';
require_once 'Classes\Course.php';
require_once 'Classes\Field.php';

$field = new Field();
$course = new Course();
$field->addCourse($course);
$honda = new Honda();
$field->addCar($honda);
$nissan = new Nissan();
$field->addCar($nissan);
$ferrari = new Ferrari();
$field->addCar($ferrari);
$toyota = new Toyota();
$field->addCar($toyota);
$field->raceStart();

?>