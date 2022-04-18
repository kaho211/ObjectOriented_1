<?php
require 'Classes\Cars\Cars.php';
require 'Classes\Cars\Ferrari.php';

// 実行結果
$ferrari = new Ferrari();
$ferrari->printCarDetail();
$ferrari->isLiftUp();
?>