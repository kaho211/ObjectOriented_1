<?php
require_once 'Cars.php';

class Honda extends Cars{
    public function __construct($member_capacity,$member = 0,$price,$acceleration,$decceleration,$max_speed,$height){
        $this->name = "honda";
        $this->member_capacity = $member_capacity;
        $this->member = $member;
        $this->price = $price;
        $this->acceleration = $acceleration;
        $this->decceleration = $decceleration;
        $this->speed = 0;
        $this->max_speed = $max_speed;
        $this->height = $height;
    }
}
?>