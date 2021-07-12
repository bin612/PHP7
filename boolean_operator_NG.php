<?php
#TODO and와 or를 사용하려면 ($test1 and $test2)와 같이 논리식을 괄호로 묶어야 한다.
#TODO 그 이유는 and와 or의 우선순위가 대입연산자인 = 보다 낮기 떄문이다.
#TODO 논리식을 괄호로 묶지 않으면 먼저 $result1 = $test1 부분이 실행되어 잘못된 코드가 됩니다.
$test1 = TRUE;
$test2 = FALSE;
$result1 = $test1 and $test2;
$result2 = $test1 or $test2;
var_dump($result1);
var_dump($result2);

/*
 result
  true
  true
 */

