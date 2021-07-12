<?php
#TODO 논리곱은 &&와 and, 논리합은 || 와 or과 같이 두 종류의 연산자가 있다.
#TODO and와 or를 사용하면 아래 소스코드와 같다.

$test1 = TRUE;
$test2 = FALSE;
$result1 = ($test1 and $test2);
$result2 = ($test1 or $test2);
var_dump($result1);
var_dump($result2);

#TODO result
#TODO false, true