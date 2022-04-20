<?php

class  Field{
    private $car_lists = [];
    private $course;
    private $result_list = [];

    #車を追加する
    public function addCar($car){
        $this->car_lists[] = ["object"=>$car, "position"=>0];
    }

    #コースを追加する
    public function addCourse($course){
        $this->course = $course;
    }

    #車が前に進む処理（現在位置の更新）
    public function goStraight($delta_time,&$car_data){

            $car_data["object"]->pushAccel($delta_time); #アクセルを踏む→ここでブレーキ踏むかっていう条件(10％の確率で踏む)も付け加える
            $car_data["object"]->pushBreak(rand(1,10)*0.1*$delta_time); #ランダム秒間ブレーキを踏む
            $speed = $car_data["object"]->getSpeed(); #速度
            $car_data["position"] += ($speed * $delta_time); #進んだ距離

    }

    #レースを開始させる処理(0.5秒ごとにどれくらい進むか)
    public function raceStart(){
        #コースの長さ
        $goal = 1000;

        echo "3\n";
        sleep(1);
        echo "2\n";
        sleep(1);
        echo "1\n";
        sleep(1);

        echo "レーススタート!\n\n";
        sleep(2);

        #5秒間のレースで0.5秒ずつ更新（進む）
        for($i = 0.5; $i< 5; $i+= 0.5){
            echo "{$i}秒経過\n";
            usleep(500000);

            #$car_listsから一台ずつ車出す(出したものは$car_data)
            foreach ($this->car_lists as &$car_data){
            
                $this->goStraight(0.5,$car_data);

                #ゴールを超えたら処理を終了し、printResult()へ移動
                if ($car_data["position"] > $goal){
                    echo $car_data["object"]->getName() . "がゴール\n";
                    $index = array_search($car_data,$this->car_lists);
                    array_splice($this->car_lists, $index, 1);
                    $this->result_list [] = ["車" => $car_data["object"]]; #ゴールした順（コースの全長を超えた順）に$result_listに入れていく
                } else {
                    echo $car_data["object"]->getName() . "が" . $car_data["position"] . "km進んだ\n";
                    sleep(1);
                }
            }

            if(count($this->car_lists) == 0){
                echo "全員がゴールしました\n";
                break;
            }
        }
        #結果の出力
        $this->printResult();
    }

    #レース結果を出力
    public function printResult(){

        #結果の出力
        // print_r($this->result_list[0]["車"]->getName());　#まずは1つ取り出す処理で試してみる
        #$result_listをfor文で取り出す
        echo "\n";
        echo "結果発表";
        for($j = 0; $j < count($this->result_list); $j++){
            sleep(1);
            echo "\n";
            echo $j + 1 . "位";
            print_r ($this->result_list[$j]["車"]->getName());
        }
    }
}
?>