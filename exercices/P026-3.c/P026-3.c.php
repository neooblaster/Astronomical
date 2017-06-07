<pre>
<h1>Astronomical Exercice 3.c, Page 026</h1><h2><a href="./">Parent</a></h2>
<?php
/**
  * Var calcultation :
  */
    // Second degree
    $y1_d = -1 * ( (28 / 60) + (13.4 / 3600) );
    $y1_ds = 3600 * $y1_d;

    $y2_d = (6 / 60) + (46.3 / 3600);
    $y2_ds = 3600 * $y2_d;

    $y3_d = (38 / 60) + (23.2 / 3600);
    $y3_ds = 3600 * $y3_d;

    $a = $y2_ds - $y1_ds;
    $b = $y3_ds - $y2_ds;
    $c = $b - $a;

    $y2_dsx2 = -2 * $y2_ds;
    $apb = $a + $b;

    $n0 = $y2_dsx2 / $apb;
    $n01 = $y2_dsx2 / ($apb + ($c * $n0));
    $n02 = $y2_dsx2 / ($apb + ($c * $n01));

    $time = 27 + $n02;
    $hours = (($time - floor($time)) * 24);
    $minutes = (($hours - floor($hours)) * 60);
    $second = (($minutes - floor($minutes)) * 3600);

    $fhours = floor($hours);
    $fminutes = floor($minutes);
    $fsecond = floor($second);



echo <<<Pxxxyz
Context : 

    f(x) = (......)
    
    We are looking for f(x) = 0
    
    
    
Given the following values for the declination of Mercury :

    1973 February 26.0 TD   -0°28'13.4"
    1973 February 27.0 TD   +0°06'46.3"
    1973 February 28.0 TD   +0°38'23.2"
    
    
Calculate when the planet's declination was zero.

Firstly, we convert the tabulated values into seconds of a degrees

    -0°28'13.4" = {$y1_d}°deg = $y1_ds second of degree
    +0°06'46.3" = {$y2_d}°deg = $y2_ds second of degree
    +0°38'23.2" = {$y3_d}°deg = $y3_ds second of degree
    
And the differences

    y1 = $y1_ds
                    a = $a
    y2 = $y2_ds                     c = $c
                    b = $b
    y3 = $y3_ds
    

Interpolation Factor corresponding to zero of the function is given with the following formula

    n0 = (-2y2) / (a + b + cn0)
    
    n0 = (-2 * $y2_ds) / ($a + $b + $c * n0)
    n0 =  $y2_dsx2 / $apb + {$c}n0
    
Putting n0 = 0 in the second member

    n0 = $y2_dsx2 / ($apb + ($c * 0))
    n0 = $y2_dsx2 / $apb
    n0 = $n0; [Excepeted : -0.20332]
    

Repeating the calculation with n0 = $n0 in second member

    n0 = $y2_ds / ($apb + ($c * $n0))
    n0 = $n01; [Excepeted : -0.20125]
    

Repeating the calculation with n0 = $n01 in second member

    n0 = $y2_ds / ($apb + ($c * $n01))
    n0 = $n02; [Excepeted : -0.20127]

Hence, n0 = $n02 and therefore, the tabular interval being one day, Mercury crossed the celestial equator on :

    1973 February 27.0 TD + $n02 = $time = 1973 February 26 TD at {$fhours}h{$fminutes}m{$fsecond}s.
Pxxxyz;
