<?php
// Q1 tic-tac問題
for($number=1; $number <= 100; $number++)
{
    if($number % 20 == 0){
        echo 'tic-tac'."\n";
    }elseif($number % 4 == 0){
        echo 'tic'."\n";
    }elseif($number % 5 == 0){
        echo 'tac'."\n";
    }else{
        echo $number."\n";
    }
}

// Q2 多次元連想配列
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

foreach($personalInfos as $index => $info){
echo ($index + 1).'番目の'.$info['name'].'さんのメールアドレスは'.$info["mail"].'で、電話番号は'.$info["tel"]. "です。\n"; 
}

foreach ($personalInfos as $key => $info) {
    $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);  
 
 
// Q3 オブジェクト-1
    $student = new Student(10, '鈴木');
    echo '学籍番号'.$student -> studentId.'の生徒は'.$student -> studentName.'です。'

// Q4 オブジェクト-2
public function attend($subject)
    {
       
        echo $this->studentName.'は'.$subject.'の授業に出席しました。学籍番号'.$this->studentId;
    }


// Q5 定義済みクラス
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d'); 

$date1 = new DateTime();
$date2 = new DateTime('1992-4-25');
$interval = $date1 ->diff($date2);
echo 'あの日から'.$interval->format('%a').'日経過しました。';
?>