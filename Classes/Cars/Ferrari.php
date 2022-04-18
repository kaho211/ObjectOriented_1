<?php
require_once 'Cars.php';

class Ferrari extends Cars{

    protected $change_height = false;

    function __construct(
        $name = "ferrari",
        $member_capacity = 2, #定員数
        $member = 1, #乗員数
        $price = 5300, #価格
        $acceleration = 100, #加速度
        $deceleration = 40, #減速度
        $speed = 0, #速度
        $max_speed = 340, #最高速度
        $height = 1000, #車高
    ){
        $price = mt_rand(5000, 7000);
        parent::__construct(
            $name,
            $member_capacity,
            $member,
            $price = mt_rand($price - 1000, $price + 2000),
            $acceleration,
            $deceleration,
            $speed,
            $max_speed,
            $height
        );
    }

    function getHeight(){
        return $this->height;
      }

    // リフトアップとリフトダウンの処理
    public function isLiftUp(){
        // 初期の車高だったらリフトアップをする
        if(!$this->change_height){
            $this->height += 40;
            $this->acceleration *= 0.8;
            echo "リフトアップ！\n";
            echo "リフトアップ後の車高：{$this->height}mm\n";
            echo "リフトアップ後の加速度：{$this->acceleration}m/s^2\n";
        } else {
            $this->height -= 40;
            $this->acceleration /= 0.8;
            echo "リフトダウン！";
            echo "リフトダウン後の車高：{$this->height}mm\n";
            echo "リフトダウン後の加速度：{$this->acceleration}m/s^2\n";
        }
        $this->change_height = !($this->change_height);
    }
}
?>