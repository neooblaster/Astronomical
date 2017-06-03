<pre>
<h1>Astronomical Exercice 3.b, Page 025</h1><h2><a href="./">Parent</a></h2>
<?php
/**
  * Var calcultation :
  */
    $y1 = 1.3814294;
    $y2 = 1.3812213;
    $y3 = 1.3812453;

    $a = $y2 - $y1;
    $b = $y3 - $y2;

    $c = $b - $a;

    $ym = $y2 - (pow($a + $b, 2) / (8 * $c));

    $nm = -1 * (($a + $b) / (2 * $c));

    $ct = 4 * $nm;

    $day = floor($ct);
    $hour = round(($ct - $day) * 24, 0);

    $exday = 16 + $day;

echo <<<Pxxxyz
Calculate the time of passage of Mars through the perihelion in May 1992, and the value of its radius vector at that instant

The following values for the distance Sun-Mars have been calculated at intervals of four days :

1992 May 12.0 TD  1.381 4294
1992 May 16.0 TD  1.381 2213
1992 May 20.0 TD  1.381 2453

The differences are

    a = $a
                                c = $c
    b = $b
    
Extreme value formulas :

    ym = y2 - ((a + b)² / 8 * c)
    
    nm = -1 * ((a + b) / (2 * c))
    
from which we decuce :

    ym = $ym    and nm = $nm

Hence, the least distance from Mars to Sun is $ym AU.
The corresponding time is found by multiplying 4 days (the tabular interval) by +$nm;
This gives $ct, or $day day and $hour hours later than the central time, that is 1992 May $exday, at {$hour}h TD.
Pxxxyz;
