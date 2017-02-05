<?php
//使用php -S localhost:8000 命令測試内置服務器功能
echo "shima";

//测试全局变量
$count = 100;
function setCount($param)
{
    global $count;
    $count = $param;
}

setCount(2000);
print $count;

//测试常量
define("MAX", 1000);
//直接获取常量值
echo MAX;
//使用constant函数获取常量值
echo constant("MAX");
echo "<br/>";
//魔术常量
echo __FILE__;//当前文件
echo "<br/>";
echo __LINE__;//当前所在行数
echo "<br/>";

//elseif语句
$score = 60;
if ($score < 60) {
    echo "不及格";
} elseif ($score >= 60 && $score < 90) {
    echo "良";
} else {
    echo "优";
}
echo "<br/>";

//foreach语句
$arr = array(1, 2, "who", "are", "you");
foreach ($arr as $i) {
    echo $i . " ";
}
echo "<br/>";

//数组
$products = array(
    "Tencent" => "WeChat",
    "Apple" => "IPhone",
    "Microsoft" => "Windows"
);
//PHP 5.4 后也可以
$products = [
    "Tencent" => "WeChat",
    "Apple" => "IPhone",
    "Microsoft" => "Windows"
];
$products['Google'] = "Android";
echo $products['Google'] . "<br/>";

//字符串
$str = "中国你好！";
echo strlen($str) . "<br/>";
echo strpos($str, "国") . "<br/";//从0开始

//动态函数调用
function sayHello()
{
    echo "<br/>Hello PHP ~<br/>";
}

function sayHi()
{
    echo "<br/>HI HTML ~<br/>";
}

$function_holder = 'sayHello';
$function_holder();
$function_holder = 'sayHi';
$function_holder();