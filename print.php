<pre>
<?php 

##값을 한 개만 표시하기
$msg = "안녕, 하세요~";
print($msg)."<br>";

$stringMsg = "알라딘";
$stringAge = "20";


print $stringMsg."님".$stringAge."살<br>";


##디버깅을 위한 변수 값 출력하기
##print_r()
$color = array("red", "blue", "green");
$new = new DateTime();


print_r($color);
print_r($new);


## var_dump
$varMsg = "안녕";
$varColor = array("res", "blue","green");
$now = new DateTime();
$point = 45;
$isPass = ($point);
$userName;
var_dump($varMsg);
var_dump($varColor);
var_dump($now);
var_dump($point);
var_dump($isPass);
var_dump($userName);

?>
</pre>