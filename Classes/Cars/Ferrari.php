<?php
require_once 'Cars.php';

class Ferrari extends Cars{

    protected $change_height;
    protected $change_acceleration;

    // リフトアップした時の処理
    public function liftUp(){
        echo "[リフトアップ]\n";
        $this->change_height = $this->height + 40;
        echo "リフトアップ後の車高：{$this->change_height}\n";
        $this->change_acceleration = $this->acceleration * 0.8;
        echo "リフトアップ後の加速度：{$this->change_acceleration}\n";
    }

    // リフトダウンした時の処理
    public function liftDown(){
        echo "[リフトダウン]\n";
        if ($this->height < $this->change_height ) {
            $this->height = $this->change_height - 40;
            echo "リフトダウン後の車高：{$this->height}\n";
            $this->acceleration = $this->change_acceleration / 0.8;
            echo "リフトダウン後の加速度：{$this->acceleration}\n";
        } else {
            echo "リフトダウン出来ません";
        }
    }
}
?>