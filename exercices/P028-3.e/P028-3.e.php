<pre>
<h1>Astronomical Exercice 3.e, Page 028</h1><h2><a href="./">Parent</a></h2>
<?php
/**
  * Var calcultation :
  */
    $y1 = round(((54 * 60) + 36.125), 3);
    $y2 = round(((54 * 60) + 24.606), 3);
    $y3 = round(((54 * 60) + 15.486), 3);
    $y4 = round(((54 * 60) + 08.694), 3);
    $y5 = round(((54 * 60) + 04.133), 3);

    $a = round($y2 - $y1, 3);
    $b = round($y3 - $y2, 3);
    $c = round($y4 - $y3, 3);
    $d = round($y5 - $y4, 3);

    $e = round($b - $a, 3);
    $f = round($c - $b, 3);
    $g = round($d - $c, 3);

    $h = round($f - $e, 3);
    $j = round($g - $f, 3);

    $k = round($j - $h, 3);

    $factor = ( (3 * 60) + 20) / (12 * 60);

    $y = $y3 + ( $factor * ( (( $b + $c) / 2) - ($h + $j) / 12)) + (pow($factor, 2) * ( (12 * $f - $k) / 24)) + (pow($factor, 3)*( ($h + $j) / 12)) + (pow($factor, 4)*($k / 24));

    $toMinutes = $y / 60;
    $minutes = floor($toMinutes);
    $toSeconds = $toMinutes - $minutes;
    $toSeconds *= 60;
    $seconds = floor($toSeconds);
    $toMile = $toSeconds - $seconds;
    $toMile *= 1000;
    $Mile = floor($toMile);

echo <<<Pxxxyz
Five tabular values :

    y1
        A 
    y2      E
        B       H
    y3      F       K
        C       J
    y4      G
        D
    y5


Formula :

              n             n²       n(n² - 1)            n²(n² - 1)
    y = y3 + --- (B + C) + ---- F + -----------(H + J) + ------------ K
              2             2            12                   24
    
      
              Bn + Cn      Fn²      Hn^3 + Jn^3 - Hn - Jn     Kn^4 - Kn²
    y = y3 + --------- + ------- + ----------------------- + ------------
                 2          2               12                    24
    
                 
              Bn     Cn     Fn²     Hn^3     Jn^3     Hn     Jn     Kn^4     Kn²
    y = y3 + ---- + ---- + ----- + ------ + ------ - ---- - ---- + ------ - -----
              2      2       2       12       12      12     12      24      24
    
    
                 B     C     H      J           F     K              H      J              K
    y = y3 + n( --- + --- - ---- - ----) + n²( --- - ---- ) + n^3 ( ---- + ---- ) + n^4 ( ---- )
                 2     2     12     12          2     24             12     12             24
                 
                 
                 B + C     H + J            12F - K             H + J             K
    y = y3 + n( ------- - ------- ) + n² ( --------- ) + n^3 ( ------- ) + n^4 ( ---- )
                   2        12                 24                12               24

             
             
Consider the following values of the equatorial horizontal parallax of the moon :

    1992 February 27.0 TD   54'36.125"
    1992 February 27.5 TD   54'24.606"
    1992 February 28.0 TD   54'15.486"
    1992 February 28.5 TD   54'08.694"
    1992 February 29.0 TD   54'04.133"


First, the differences in seconds :

    A = $a
                E = $e
    B = $b              H = $h
                F = $f          K = $k
    C = $c              J = $j
                G = $g
    D = $d
                   

We see that the third differences (H and J) may no be neglected, unless an accuracy of about 0.1" is sufficient.

Let us now calculate the Monn's parallax on February 28 at 3h20m TD.

The tabular interval being 12 hours. We have :

         3h20m     3*60 + 20      200
    n = ------- = ----------- = ------- = $factor
          12h        12*60        720
          

Calculate y with formula where n = $factor :
     
     
                 B + C     H + J            12F - K             H + J             K
    y = y3 + n( ------- - ------- ) + n² ( --------- ) + n^3 ( ------- ) + n^4 ( ---- )
                   2        12                 24                12               24
                   
    y = $y3 + $factor ( (( $b + $c) / 2) - ($h + $j) / 12) + {$factor}² ( (12 * $f - $k) / 24) + {$factor}^3 ( ($h + $j) / 12) + {$factor}^4 ($k / 24) 
    
    y = $y'
    
    y = $minutes'$seconds.$Mile" [Expected : 54'13.369"]

Pxxxyz;
