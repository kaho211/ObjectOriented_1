<?php

class Cars
{
    protected $name; #名前
    protected $member_capacity; #定員数
    protected $member; #乗員数
    protected $price; #価格
    protected $acceleration; #加速度
    protected $decceleration; #減速度
    protected $speed; #速度
    protected $max_speed; #最高速度
    protected $height; #車高

    // 必要な値を出力するための初期設定（インスタンス生成したときに自動的に作られるもの。newクラスしたとき引数を入れればそれが設定される）
    public function __construct($name,$member_capacity,$member = 0,$price,$acceleration,$decceleration,$max_speed,$height){
        $this->name = $name;
        $this->member_capacity = $member_capacity;
        $this->member = $member;
        $this->price = $price;
        $this->acceleration = $acceleration;
        $this->decceleration = $decceleration;
        $this->speed = 0;
        $this->max_speed = $max_speed;
        $this->height = $height;
    }

    #アクセルを踏む
    public function pushAccel($time){
        $this->speed += $time * $this->acceleration;
    }

    #ブレーキを踏む
    public function pushBreak($time){
        $this->speed += $time * $this->decceleration;
    }

    #乗る
    public function getOn($add_member){
        $this->member += $add_member;
    }

    #降りる
    public function getOff($dec_member){
        $this->member -= $dec_member;
    }

    // 車の仕様を出力
    public function printCarDetail(){
        echo "メーカー : {$this->name}\n";
        echo "定員数： {$this->member_capacity}人\n";
        echo "価格：{$this->price}万円\n";
        echo "加速度：{$this->acceleration}km/h\n";
        echo "減速度：{$this->decceleration}km/h\n";
        echo "最高速度：{$this->max_speed}km/h\n";
        echo "車高：{$this->height}mm\n";
    }
}
?>