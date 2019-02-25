<?php
$debut = 0;
function fibo($j= 20,$a = 0,$b = 1) {
    for($i = 0; $i < $j; $i++){
        yield $a.','; 
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}

foreach(($suite = fibo(10)) as $s){
    echo $s;
}
