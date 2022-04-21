<?php
require_once 'Cars.php';

class Nissan extends Cars{
    function __construct(
        $name = "nissan",
        $member_capacity = 4, #定員数
        $member =1, #乗員数
        $price = 560, #価格
        $acceleration = 30, #加速度(m/s^2)
        $deceleration = 40, #減速度(m/s^2)
        $speed = 0, #速度(km/h)
        $max_speed = 290, #最高速度(km/h)
        $height = 1400, #車高
    ){
        parent::__construct(
            $name,
            $member_capacity,
            $member,
            $price = mt_rand($price - 50, $price + 2000),
            $acceleration *= 0.6, #生産時の欠陥のため加速度は60%の性能
            $deceleration,
            $speed,
            $max_speed,
            $height
        );
    }
}
?>