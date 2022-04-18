<?php
require_once 'Classes\Cars\Cars.php';
require_once 'Classes\Cars\Honda.php';
require_once 'Classes\Cars\Nissan.php';
require_once 'Classes\Cars\Ferrari.php';

#実行結果
$classNames = ["Honda","Nissan","Ferrari"];
  foreach($classNames as $className){
    $car_list = [];
    $random_number = mt_rand(1,30);

    for ($j = 0; $j < $random_number; $j++){
      $car_list[] = new $className();
    };
    Cars::printCarStatistics($car_list);
  };
?>