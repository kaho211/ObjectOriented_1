<?php
require 'Classes\Cars\Cars.php';
require 'Classes\Cars\Honda.php';
require 'Classes\Cars\Nissan.php';
require 'Classes\Cars\Ferrari.php';

// 実行結果
$honda = new Honda();
$honda->printCarDetail();

$nissan = new Nissan();
$nissan->printCarDetail();

$ferrari = new Ferrari();
$ferrari->printCarDetail();
?>