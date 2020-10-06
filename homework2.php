<?php
$name = "keisuke sasaki";
// もし $name が keisuke sasakiなら、{} の中が実行される
// それ以外なら、 else のあとの {} の中のコードが実行される
if ($name = "keisuke sasaki") {
    echo "私はkeisuke sasaki です。";
}else {
    "keisuke sasaki ではありません";
}

$total = 0;
// 1から10000までの合計の値を表示する
for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array(" pine", " grape", " orange", " peach", " banana");
// $fruits から一つずつ要素を取り出して、$fruit に代入される
foreach($fruits as $fruit){
    echo $fruit;
}

// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}