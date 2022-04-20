<?php
require_once 'Road.php';

class Straight extends Road{
        public $name = "straight";
        public $permissible_speed = 100;
        public $distance = 100;

    function __construct(){

    }
}
?>