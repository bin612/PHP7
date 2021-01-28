<?php

##amount를 4명으로 나눈 금액 구하기
$amount = 54750;
$rest = $amount % 4;
$person = ($amount - $rest)/4;
echo "1 인 {$person}원, 부족{$rest}원";

##결과 1인 13687원, 부족 2원

?>