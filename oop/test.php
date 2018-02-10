<?php
 
$n = 4;

function check_is_prime($n){
    if($n%2 ==0 || $n%3 ==0 || $n%5 ==0 || $n%7 ==0){
        echo "not a prime";
    }else{
        echo "is prime";
    }
}

check_is_prime(97);