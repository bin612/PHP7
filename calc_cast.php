<?php

##문자열을 사용한 계산식

$person = "3명" + "2명";
$price = "5000원" * $person;
$price = $price * "1.1 부가세";
echo "금액 {$price}원, {$person}명";

##금액 27500원, 5명

?>