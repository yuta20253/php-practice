<?php
// Q1 変数と文字列
$name = '安本';
echo '私の名前は「' . $name . '」です' . "\n";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";

$divNum = $num / 2;
echo $divNum . "\n";

// Q3 日付操作
$date = date('Y年m月j日 G時i分s秒');
echo '現在時刻は' . $date . 'です。' . "\n";

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === "mac") {
    echo '使用OSは、macです。' . "\n";
} else {
    if ($device === "windows") {
        echo '使用OSは、windowsです。' . "\n";
    } else {
        echo 'どちらでもありません。' . "\n";
    }
    
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = $age < 18 ? '未成年です。' : '成人です';
var_dump($message) . "\n";
echo $message . "\n";


// Q6 配列
$kantoArr = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県'];
echo "{$kantoArr[2]}と{$kantoArr[3]}は関東地方の都道府県です。" . "\n";

// Q7 連想配列-1
$kantoPrefectureAndCityArr = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($kantoPrefectureAndCityArr as $value) {
    echo "{$value}" . "\n";
}

// Q8 連想配列-2
$kantoPrefectureAndCityArr = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($kantoPrefectureAndCityArr as $key => $value) {
    if ($key == '埼玉県') {
        echo "{$key}の県庁所在地は、{$value}です。" . "\n";
    }
}

// Q9 連想配列-3
$kantoPrefectureAndCityArr = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '愛知県' => '名古屋市', '大阪府' => '大阪市'];
foreach ($kantoPrefectureAndCityArr as $key => $value) {
    if ($key == '大阪府' || $key == '愛知県' ) {
        echo "{$key}は関東地方ではありません。" . "\n";
    } else {
        echo "{$key}の県庁所在地は{$value}です。" . "\n";
    }
    
}

// Q10 関数-1
function hello ($name) 
{
    echo "{$name}さん、こんにちは。" . "\n";
}

$name = '山田';
hello($name);

$name = '鈴木';
hello($name);

// Q11 関数-2
const TAX = 1.1;
function calcTaxInPrice ($price)
{
    return $price * TAX;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";


// Q12 関数とif文
function distinguishNum ($num)
{
    if ($num % 2 == 0) {
        echo "{$num}は偶数です。" . "\n";
    } else {
        echo "{$num}は奇数です。" . "\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grades)
{
    switch ($grades) {
        case 'A':
        case 'B':
            echo "合格です。" . "\n";
            break;
        case 'C':
            echo "合格ですが追加課題があります。" . "\n";
            break;
        case 'D':
            echo "不合格です。" . "\n";
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            break;
    }    
}

evaluateGrade('A');
evaluateGrade('B');
evaluateGrade('C');
evaluateGrade('D');
evaluateGrade('aaa');


