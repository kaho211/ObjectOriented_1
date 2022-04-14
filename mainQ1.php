<?php
require 'Classes\Cars\Cars.php';
require 'Classes\Cars\Honda.php';
require 'Classes\Cars\Nissan.php';
require 'Classes\Cars\Ferrari.php';

// 実行結果
$honda = new Honda(5, 0, 2700,70,50, 300, 1200);
$honda->printCarDetail();

$nissan = new Nissan("nissan",4, 0, 560, 30, 40, 290, 1400);
$nissan->printCarDetail();

$ferrari = new Ferrari("ferrari", 2, 0, 5300, 100, 40, 340, 1000);
$ferrari->printCarDetail();
?>