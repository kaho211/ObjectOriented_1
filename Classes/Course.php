<?php
require_once 'Race\Straight.php';
require_once 'Race\Curve.php';
require_once 'Race\BeforeCurve.php';

class Course{

    #$course = [["クラス名", "許容速度(㎞)", "道の終了地点(㎞)"]]で表す
    public $course = [];
    function __construct(){
        #ストレートコースの作成
        $straight = new Straight();
        $this->course[] = [
        "road_type" => $straight->name,
        "permissible_speed" => $straight->permissible_speed,
        "finish_point" => $straight->distance,
        ];
        #$courseの中に配列できてるか確認
        // print_r($this->course);

    #ストレートとカーブをつなげてコースを作る
    }
    function getCourse() {
         echo $this->course;
    } 
}
?>