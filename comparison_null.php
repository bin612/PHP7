<?php
    // null일 때 초기값으로 계산하기
    /* 
        ??  -> a ?? b ?? c 
        a,b,c 순으로 평가해서 null이 아닌 처음 값 a,b,c가 
        모두 null이면 null  
    */
    $price = 250 * ($unitprice ?? 2); // null ?? 2 
    var_dump($unitprice);   // 초기값 null
    echo $price; // 500
