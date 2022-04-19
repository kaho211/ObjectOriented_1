<?php
require_once 'Classes\Cars\Cars.php';
require_once 'Classes\Cars\Honda.php';
require_once 'Classes\Cars\Nissan.php';
require_once 'Classes\Cars\Ferrari.php';

$nissan = new Nissan();
echo "[車の仕様]\n";
$nissan->printCarDetail();
echo "\n～乗車中～\n";
$nissan->getOn(1);
$nissan->getOn(3);
echo "\n～降車中～\n";
$nissan->getOff(1);
$nissan->getOff(2);
?>