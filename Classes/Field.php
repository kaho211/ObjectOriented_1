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
            $car_data["position"] += round($car_data["object"]->getSpeed_Mps() * $delta_time, 2); #進んだ総距離 $speedは時速、$delta_timeは秒 →　単位をそろえる！($speedを秒速にする)

    }

    #レースを開始させる処理(0.5秒ごとにどれくらい進むか)
    public function raceStart(){
        #コースの長さ
        $goal = 100; #(m)

        echo "3\n";
        sleep(1);
        echo "2\n";
        sleep(1);
        echo "1\n";
        sleep(1);

        echo "レーススタート!\n\n";
        sleep(2);

        #10秒間のレースで10秒ずつ更新（進む）
        for($i = 10; $i< 1000000; $i+= 10){
            echo "\n----------------------------\n";            
            echo "[{$i}秒経過]\n";
            usleep(500000);

            #$car_listsから一台ずつ車出す(出したものは$car_data)
            foreach ($this->car_lists as &$car_data){
            
                $this->goStraight(0.5,$car_data);

                #ゴールを超えたら処理を終了し、printResult()へ移動
                if ($car_data["position"] > $goal){
                    echo "～" . $car_data["object"]->getName() . "がゴール～\n";
                    $index = array_search($car_data,$this->car_lists);
                    array_splice($this->car_lists, $index, 1);
                    $this->result_list [] = ["car" => $car_data["object"]]; #ゴールした順（コースの全長を超えた順）に$result_listに入れていく
                } else {
                    echo $car_data["object"]->getName() . "が" . $car_data["position"] . "m進んだ\n";
                    echo "速さ：" . $car_data["object"]->getSpeed() . "(km/h)\n";
                    echo "速さ：" . $car_data["object"]->getSpeed_Mps() . "(m/s)\n";
                    echo "加速度：" . $car_data["object"]->getAcceleration() . "(m/s^2)\n";
                    sleep(1);
                }
            }

            if(count($this->car_lists) == 0){
                echo "～全員がゴールしました～\n";
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
            print_r ($this->result_list[$j]["car"]->getName());
        }
    }
}
?>