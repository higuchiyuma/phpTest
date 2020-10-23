<?php

$name = "yuma";

if ($name == "yuma") {

    echo "私はあなたの名前です";

}else {
    
    echo "あなたの名前ではありません";

}

$total = 0;

for($i = 0; $i <= 10000; $i++) {

    $total += $i;

}

echo $total;

$fruits = array("banana", "grape", "melon", "lemon", "mango");

foreach($fruits as $fruit){

    echo "好きなのは" . $fruit;

    echo "\n";

}

$start = 1;

$end = 100;

for($i = 1; $i <= 100; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}


?>