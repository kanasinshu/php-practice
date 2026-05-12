<?php
// Q1 変数と文字列
$name = '金井';
echo "私の名前は『".$name."』です。";
// Q2 四則演算
$num = 5 * 4;
echo "$num"."\n";
$total = "$num" / 2;
echo $total
// Q3 日付操作
echo date("現在時刻は、Y年m月d日 H時i分s秒です");

// Q4 条件分岐-1 if文
$device = "windows";
 // mac //
if ($device === "windows") {
echo "使用OSは、windowsです。";
} else { 
    if ($device === "mac"){
    echo "使用OSは、macです。";
    } else { 
    echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age >= 18) ? "成人です。" : "未成年です。";
echo $message;

// Q6 配列
$prefecture = ['東京都', '神奈川県', '千葉県', '埼玉県', '茨城県', '栃木県', '群馬県'];
echo $prefecture[2]."と".$prefecture[3]."は関東地方の都道府県です。";

// Q7 連想配列-1
$prefecture_capital = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' =>'千葉市', '埼玉県' => 'さいたま市', '茨城県' => '水戸市', '栃木県' => '宇都宮市', '群馬県' => '前橋市'];
foreach ($prefecture_capital as $capital) {
    echo $capital . "\n";


// Q8 連想配列-2
$prefecture_capital = 
['東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' =>'千葉市',
'埼玉県' => 'さいたま市',
'茨城県' => '水戸市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市'];

foreach ($prefecture_capital as $pref => $capital) 
    if ($pref ==="埼玉県"){
        echo $pref."の県庁所在地は、" .$capital."です。";
    }

// Q9 連想配列-3
$prefecture_capital = 
['東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' =>'千葉市',
'埼玉県' => 'さいたま市',
'茨城県' => '水戸市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市'];

$prefecture_capital['大阪府'] = '大阪市';
$prefecture_capital['沖縄県'] = '那覇市';


foreach ($prefecture_capital as $pref => $capital) {
    if($pref === '大阪府' || $pref === '沖縄県'){
        echo $pref.'は関東地方ではありません'."\n";
    }else{
        echo $pref.'の県庁所在地は、' .$capital.'です。'."\n";
    }
    }

// Q10 関数-1
function hello($name){
    return $name.'さん、こんにちは。';
}
echo hello("金谷")."\n";
echo hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price)
{
   return $price * 1.1;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';

// Q12 関数とif文
function distinguishNum($number)
{return $number % 2;
}
$number = 111;
if (distinguishNum($number) === 0){
    echo $number.'は偶数です。';
}else{
    echo $number.'は奇数です。';
}

// Q13 関数とswitch文
function evaluateGrade($grade)
{
switch ($grade){
    case 'A':
    case 'B':
        return '合格です。';
    break;
    case 'C':
        return '合格ですが追加課題があります。';
    break;
    case 'D':
        return '不合格です。';
    break;
    default:
        return '判定不明です。講師に問い合わせてください。';
}
}

echo evaluateGrade('A')."\n";
echo evaluateGrade('G');

?>