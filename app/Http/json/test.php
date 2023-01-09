<?php
// 何かテストしたい時に使用するファイル
class test {

    public function index(){

        $getJsonFIle = json_decode(file_get_contents("/Applications/MAMP/htdocs/articleApp/app/Http/json/elect.json"),true);
        $periodList = $getJsonFIle['period'];

        $currentDate = "20221231";
        $currentTime = "17:01";
        $startDate = $periodList[0]["startDate"];
        $endDate = $periodList[2]["endDate"];
        $startTime = $periodList[0]["startTime"];
        $endTime = $periodList[2]["endTime"];

        // 日付比較のパラメーター（デフォは日付）
        $paramArray = [
            'start'=>$startDate,
            'end'=>$endDate,
            'current1'=>$currentDate,
            'current2'=>$currentDate,
        ];

        // どっちかに時間指定がある時
        if($startTime || $endTime){
            // 今日の日付が開始日当日なら
            if($startDate == $currentDate){
                // 開始時間を渡してあげる
                $paramArray['start'] = $startTime;
                $paramArray['currentParam1'] = $currentTime;
            }
            // 今日の日付が終了日当日なら
            elseif($endDate == $currentDate){
                // 終了時間を渡してあげる
                $paramArray['end'] = $endTime;
                $paramArray['currentParam2'] = $currentTime;
            }

            // 時間指定があっても当日でなければ、そもそも日付比較となるためパラメーターの設定は必要なし
            // さらに、どっちも時間指定があっても今日の日付がどっちにも等しくなることはあり得ないた設定の必要なし
        }

        $this->dateCompare($paramArray);
    }

    public function dateCompare($dateAndTimeArr){
    //           12/21                             12/22                        2/20                         12/21
        if($dateAndTimeArr['currentParam1'] < $dateAndTimeArr['start'] || $dateAndTimeArr['end'] < $dateAndTimeArr['currentParam2']){
            return false;
        }
    }

    public function elect(){
        $getJsonFIle = json_decode(file_get_contents("/Applications/MAMP/htdocs/articleApp/app/Http/json/elect.json"),true);
        $periodList = $getJsonFIle['period'];

        $getDateTime = new DateTime();
        var_dump($getDateTime);
        exit;
    }

}

