<pre>
<h1>Astronomical Exercice 3.a, Page 025</h1><h2><a href="./">Parent</a></h2>
<?php
/**
  * Var calcultation :
  */
    $interval = 4.35 / 24;

    $y1 = 0.884226;
    $y2 = 0.877366;
    $y3 = 0.870531;

    $a = $y2 - $y1;
    $b = $y3 - $y2;

    $c = $b - $a;

    $y = $y2 + ($interval / 2) * ($a + $b + ($interval * $c));

echo <<<Pxxxyz
Context : 

    f(x) = (......)
    
    x is Time and we are looking for known date.
    y = f(x) is value we want to get
    
    

From table (3.2), calculate the distance of Mars to Earth on 1992 November 8, at 4h21m TD.

Table 3.2 :
November 7 y1 = 0.884 226 AU
November 8 y2 = 0.877 366 AU
November 9 y3 = 0.870 531 AU

Interpolation formula is for interval n in [-1,+1] : y = y2 + (n/2)(a + b + nc)

• We have 4h21m = 4h + (21/60)h = 4.35h and, since the tabular interval is 1 day or 24 hours,
• n = 4.35h / 24h = $interval

With formula, y = 0.877 366 + ($interval/2)((0.877 366 - 0.884 226) + (0.870 531 - 0.877 366) + n * ((0.870 531 - 0.877 366) - (0.877 366 - 0.884 226)))
y = $y2 + ($interval / 2)($a + $b + $interval * $c)
y = $y (Excepted : 0.876 125)
Pxxxyz;
