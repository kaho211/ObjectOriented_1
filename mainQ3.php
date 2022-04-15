<?php
require_once 'Classes\Cars\Cars.php';
require_once 'Classes\Cars\Honda.php';
require_once 'Classes\Cars\Nissan.php';
require_once 'Classes\Cars\Ferrari.php';

#実行結果
$classNames = ["Honda","Nissan","Ferrari"];
$all_car_list = [];
  for($i = 0; $i < count($classNames); $i++){
    $className = $classNames[$i];
    $random_number = mt_rand(1,30);

    for ($j = 0; $j < $random_number; $j++){
      $car_list[] = new $className();
    };
    $all_car_list = array_merge($car_list);
  };

  Cars::printCarStatistics($all_car_list);
?>