<?php
require_once 'Cars.php';

class Nissan extends Cars{
    function __construct(
        $name = "nissan",
        $member_capacity = 4, #定員数
        $member =0, #乗員数
        $price = 560, #価格
        $acceleration = 30, #加速度
        $deceleration = 40, #減速度
        $speed = 0, #速度
        $max_speed = 290, #最高速度
        $height = 1400, #車高
    ){
        parent::__construct(
            $name,
            $member_capacity,
            $member,
            $price = mt_rand(500, 2000),
            $acceleration,
            $deceleration,
            $speed,
            $max_speed,
            $height
        );
    }
}
?>