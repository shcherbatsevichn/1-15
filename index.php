<?php 
error_reporting(-1);
// Определить количество различных делителей целого числа N. 
$n = 9000;


$counter = 0;
for($i = 1; $i <= $n; $i++){
    if($n % $i == 0){
        $counter++;
    }
}
echo ($counter);
