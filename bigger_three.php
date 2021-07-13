<?php
#TODO mt_rand([최소값],[최대값])
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a>$b)? $a : $b;
echo "큰 값은 {$bigger}, \$a는 {$a}, \$b는 {$b}";

/*
 랜덤으로 출력한 결과
 큰 값은 43, $a는 43, $b는 19
 큰 값은 19, $a는 19, $b는 17
 큰 값은 28, $a는 28, $b는 10
 */