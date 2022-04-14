<?php
require 'Classes\Cars\Cars.php';
require 'Classes\Cars\Ferrari.php';

// 実行結果
$ferrari = new Ferrari("ferrari", 2, 0, 5300, 100, 40, 340, 1000);
$ferrari->printCarDetail();
$ferrari->liftUp();
?>