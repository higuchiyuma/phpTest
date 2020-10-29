<?php

function kake($mix) {

    return $mix*2;

}

echo kake(9) . "\n";

function f($a, $b){

    return $a + $b;

}

echo f(9, 17) . "\n";

function prpduct($arr) {

    $result = 0;

    for($i =0; $i < count($arr); $i++) {

        if($i == 0){
            $result += $arr[$i];

        }else{
            $result *= $arr[$i];

        }

    }

    return $result;

}

function product($arr){

    $result = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {

        $result *= $arr[$i];

    }

    return $result;
}

echo product(array(1,3,5,7,9));

function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number < $a){
             $max_number = $a;
         }
     }
    
     return $max_number;
     }
     
     echo max_array(array(6, 2, 3, 10, 5));
    



?>

<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);

?>

<?php
    $members=array("一郎","二郎","三郎");
    array_push($members,"四郎","五郎");
    print_r($members);
?>

<?php
  $array01 = ["りんご", "バナナ", "みかん", "メロン"];
  $array02 = ["ぶどう", "いちご"];
  $array03 = ["パイナップル", "もも", "柿"];
  var_dump(array_merge($array01, $array02));

  
?>

<?php
// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
?>

<?php
 
// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';
 
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';
 
?>