<?php
$n = 3;

for($i=3;$i>=1;$i--){
    $num = $i;
    for($j=3;$j>=$i;$j--){
        echo $num;
        $num --;
    }    
    echo "<br>";
}