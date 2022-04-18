<?php
require_once 'Cars.php';

class Honda extends Cars{
    function __construct(
        $name = "honda",
        $member_capacity = 5, #定員数
        $member = 1, #乗員数
        $price = 2700, #価格
        $acceleration = 70, #加速度
        $deceleration = 50, #減速度
        $speed = 0, #速度
        $max_speed = 300, #最高速度
        $height = 1200, #車高
    ){
        parent::__construct(
            $name,
            $member_capacity,
            $member,
            $price = mt_rand($price - 1000, $price + 3000),
            $acceleration,
            $deceleration,
            $speed,
            $max_speed,
            $height
        );
    }
}
?>