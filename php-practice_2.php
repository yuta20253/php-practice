<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac" . PHP_EOL;
    } elseif ($i % 4 == 0) {
        echo "tic" . PHP_EOL;  
    } elseif ($i % 5 == 0) {
        echo "tac" . PHP_EOL; 
    } else {
       echo $i . PHP_EOL;
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel' => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel' => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel' => '09055556666'
    ],
];

//1.

$personalInfos;

echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。" . PHP_EOL;

//2.

foreach ($personalInfos as $key => $value) {
    $num = (int)$key + 1;
    echo "{$num}番目の{$value['name']}のメールアドレスは{$value['mail']}で、電話番号は{$value['tel']}です。" . PHP_EOL;
}

//3.

$ageList = [25, 30, 18];

foreach ($ageList as $key => $value) {
    echo $value . PHP_EOL;
    $personalInfos[$key]['age'] = $value;
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student 
{
    public $studentId;
    public $studentName;
    
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend()
    {
        echo '授業に出席しました。';    
    }
}

$student = new Student(1, '山本');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";


// Q4 オブジェクト-2
class Student 
{
    public $studentId;
    public $studentName;
    
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";    
    }
}

$student = new Student(1, '山本');
$student->attend('PHP');


// Q5 定義済みクラス
//1.
$dt = new DateTime();
print $dt->format('Y-m-d') . PHP_EOL;

$dt->modify('- 1 month');
print $dt->format('Y-m-d') . PHP_EOL;

//2.
$dt = new DateTime();
print $dt->format('Y-m-d') . PHP_EOL;

$beforeDate = new DateTime('1992-4-25');
print $beforeDate->format('Y-m-d') . PHP_EOL;

$interval = $dt->diff($beforeDate, true)->days;
echo "あの日から{$interval}日経過しました。" . PHP_EOL;

