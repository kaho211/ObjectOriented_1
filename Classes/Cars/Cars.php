<?php

abstract class Cars
{
    protected $name; #名前
    protected $member_capacity; #定員数
    protected $member; #乗員数
    protected $price; #価格
    protected $acceleration; #加速度
    protected $deceleration; #減速度
    protected $speed; #速度
    protected $max_speed; #最高速度
    protected $height; #車高

    // 必要な値を出力するための初期設定
    public function __construct($name,$member_capacity,$member = 0,$price = 0,$acceleration,$deceleration,$speed = 0,$max_speed,$height){
        $this->name = $name;
        $this->member_capacity = $member_capacity;
        $this->member = $member;
        $this->price = $price;
        $this->acceleration = $acceleration;
        $this->deceleration = $deceleration;
        $this->speed = 0;
        $this->max_speed = $max_speed;
        $this->height = $height;
    }

    // データを取得する
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function getMember(){
        return $this->member;
      }
  
    public function getMembersCapacity(){
        return $this->members_capacity;
      }
  
    public function getAcceleration(){
        return $this->acceleration;
      }

    #アクセルを踏む
    public function pushAccel($time){
        if($this->speed > $this->max_speed){
            echo "最高速度に達しています";
            return;
        }
        $this->speed += $time * $this->acceleration;
    }

    #ブレーキを踏む
    public function pushBreak($time){
        $this->speed += $time * $this->deceleration;
        return;
    }

    #乗る
    public function getOn($person){
        if($this->member_capacity == $this->member){
            echo "定員です";
            return;
        }
        $this->member += $person;
        for ($i = 0; $i<$person; $i++){
            $this->acceleration = $this->acceleration*(0.95);
          }
          echo "追加で" . $person . "人乗車しました\n";
          echo "現在の加速度：{$this->acceleration}m/s^2\n";
    }

    #降りる
    public function getOff($person){
        if($this->member < 1){
            echo "車に乗ってください。";
            return;
        }
        $this->member -= $person;
        for ($i = 0; $i<$person; $i++){
        $this->acceleration = $this->acceleration/(0.95);
      }
      echo $person . "人降りました。\n";
    }

    #ランダム生成した車の統計結果
    static function printCarStatistics($all_car_list){
        // 合計金額
        $sum_price = array_sum(array_column($all_car_list,'price'));
        // 合計台数
        $sum_cars = count($all_car_list);
        // 平均金額
        $ave_price = round($sum_price / $sum_cars);
        echo "合計台数：{$sum_cars}台\n";
        echo "合計金額：{$sum_price}円\n";
        echo "平均金額：{$ave_price}円\n";
    }

    // 車の仕様を出力
    public function printCarDetail(){
        echo "メーカー : {$this->name}\n";
        echo "定員数： {$this->member_capacity}人\n";
        echo "価格：{$this->price}万円\n";
        echo "加速度：{$this->acceleration}m/s^2\n";
        echo "減速度：{$this->deceleration}m/s^2\n";
        echo "最高速度：{$this->max_speed}km/h\n";
        echo "車高：{$this->height}mm\n";
    }
}
?>