<?php
// 変数 $a に 3 を代入
$a = 3;
// 変数 $b に 7 を代入 
$b = 7;
// 変数 $a と 変数 $b を足した結果を出力する
echo $a + $b;

// 変数 $array_month に 配列 ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"] を代入する
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
// $srray_month から 8月 を取り出して表示する
echo $array_month[7];

// 変数 $hello に Hello を代入
$hello = "Hello,";
// 変数 $name に keisuke を代入
$name = "keisuke";
// 変数 $world に `s World! を代入
$world = "'s World!";
// 上記変数を連結させて、Hello,keisuke's World と表示させる
echo $hello . $name . $world;

// 変数 $tech_boost に "tech "という文字列を代入する
$tech_boost = "tech ";
// 変数 $tech_boost に 'boost' を連結させて、「tech boost」と表示させる
$tech_boost .= 'boost';
echo $tech_boost;

// 修正点 $2018_calendar→calendar_2018 {}→[] "2月"、→"2月", 10月→"10月" = "6月"→=> "6月"
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];