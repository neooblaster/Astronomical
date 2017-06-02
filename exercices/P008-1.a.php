<pre>
<?php

    $onhour = 9 + (14/60) + (55.8/3600);
    $timedeg = $onhour * 15;
    $rad = 180/M_PI;
    $alpharad = $timedeg / $rad;
    $tanalpha = tan($alpharad);

echo <<<P0081a
Calculate tan(A), where A = 9h14m55.8s

We first convert A to hours and decimals

    9h14m55.8s = 9 + 14/60 + 55.8/3600 = $onhour
    
Then, multiplying by 15 (Cause 1 hour = 15°deg)

    A = $timedeg
    
Dividing this value by 180/pi = $rad
A in radian = $timedeg / $rad = $alpharad;
We then find tan(A) = $tanalpha
P0081a;
