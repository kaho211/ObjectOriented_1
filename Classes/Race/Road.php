<?php
abstract class Road{
    public $name; #コースの名前
    public $permissible_speed; #許容速度
    public $distance; #コース距離
    
    function __construct(){
    }

    function getDistance(){
        return $this->distance;
    }
}
?>