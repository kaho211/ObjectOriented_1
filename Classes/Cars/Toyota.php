<?php
require_once 'Cars.php';

class Toyota extends Cars{
    function __construct(
        $name = "toyota",
        $member_capacity = 3,
        $member = 1,
        $price = 3000,
        $acceleration = 50,
        $deceleration = 40,
        $speed = 0,
        $max_speed = 200,
        $height = 1600,
    ){
        parent::__construct(
            $name,
            $member_capacity,
            $member,
            $price = mt_rand($price - 500, $price + 1000), #価格変動
            $acceleration, #加速性能変化
            $deceleration,
            $speed,
            $max_speed,
            $height
        );
        #加速度＝元の加速度＋（価格×比例定数）
        $this->acceleration += $this->price * 0.01;
    }
}
?>