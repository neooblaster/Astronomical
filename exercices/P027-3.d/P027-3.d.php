<pre>
<h1>Astronomical Exercice 3.d, Page 027</h1><h2><a href="./">Parent</a></h2>
<?php
/**
  * Var calcultation :
  */
    $y1 = -2;
    $y2 = 3;
    $y3 = 2;

    $a = $y2 - $y1;
    $b = $y3 - $y2;
    $c = $b - $a;

    $n0_linear = 0;
    $n0_curved = 0;

    for($i = 1; $i <= 30; $i++){
        $var = "n0l_$i";

        $n0_linear = (-2 * $y2) / ($a + $b + ($c * $n0_linear));
        $$var = sprintf("Iteration %02d = $n0_linear", $i);
    }

    for($i = 1; $i <= 10; $i++){
        $var = "n0w_$i";

        $n0_curved = (-1 * (((2 * $y2)+($n0_curved * ($a + $b + ($c * $n0_curved)))) / ($a + $b + (2 * $c * $n0_curved))));
        //(2 * $y2)+($n0_curved * ($a + $b + ($c * $n0_curved)))
        //$a + $b + (2 * $c * $n0_curved)
        $$var = sprintf("Iteration %02d = $n0_curved", $i);
    }

    for($i = 1; $i <= 10; $i++){
        $var = "n0c_$i";

        $n0_curved = (-1 * (((2 * $y2)+($n0_curved * ($a + $b + ($c * $n0_curved)))) / ($a + $b + (2 * $c * $n0_curved)))) + $n0_curved;
        //(2 * $y2)+($n0_curved * ($a + $b + ($c * $n0_curved)))
        //$a + $b + (2 * $c * $n0_curved)
        $$var = sprintf("Iteration %02d = $n0_curved", $i);
    }

    $iteration_2 = -1.5 + 0.61363636363636;


echo <<<Pxxxyz
Context :

    f(x) = -3x² + 2x + 3
    
   
Consider the following values of a function :

    x1 = -1     and y1 = -2
    x2 =  0     and y2 =  3
    x3 =  1     and y3 =  2
    
There is a strong curvature between x = -1 and x = +1.

First, the differences:

    a = $a
                c = $c
    b = $b

With Interpolation factor formula for linear function :

    n0 = -2y2 / (a + b + cn0)    
    
Starting with n0 = 0, below successively results :

    $n0l_1
    $n0l_2
    $n0l_3
    $n0l_4
    $n0l_5
    $n0l_6
    $n0l_7
    $n0l_8
    $n0l_9
    $n0l_10
    $n0l_11
    $n0l_12
    $n0l_13
    $n0l_14
    $n0l_15
    $n0l_16
    $n0l_17
    $n0l_18
    $n0l_19
    $n0l_20
    $n0l_21
    $n0l_22
    $n0l_23
    $n0l_24
    $n0l_25
    $n0l_26
    $n0l_27
    $n0l_28
    $n0l_29
    $n0l_30
    
The correct value of the sixth decimal is obtain after not less than 24 iterations.


With Interpolation factor formula for curved function give by Meeus :

    Δn0 = -1 * ( (2y2 + (a + b + cn0) ) / (a + b + 2cn0) )
    
Starting with n0 = 0, below successively results :

    $n0w_1
    $n0w_2
    $n0w_3
    $n0w_4
    $n0w_5
    $n0w_6
    $n0w_7
    $n0w_8
    $n0w_9
    $n0w_10
    
results are not those which was expected in books.
Something is missing in explanation
With these two values I find one explanation :

    Iteration number one : $n0w_1
    Iteration number two : $n0w_2
    
For iteration number one, it's easy, n0 = 0.
For iteration number two, I saw -1.5 + 0.61363636363636 = $iteration_2
The result is exactly what we expected for iteration 2 in book.
Please find my proposed explanation.

    •1. Given formula :
    
                      2y2 + n0 ( a + b + cn0 )
        Δn0 = -1 * ------------------------------ 
                           a + b + 2cn0
    
    
    •2. What I supposed :
    
        Δn0 = n0 - n0-1
        
    
    •3. Manipulation :
    
                             2y2 + n0 ( a + b + cn0 )
        n0 - n0-1 = -1 * ------------------------------ 
                                  a + b + 2cn0
    
                                   2y2 + n0 ( a + b + cn0 )
        n0 - n0-1 + n0-1 = -1 * ------------------------------ + n0-1
                                        a + b + 2cn0
    
                     2y2 + n0 ( a + b + cn0 )
        n0 = -1 * ------------------------------ + n0-1
                          a + b + 2cn0
                          
With this new formula, i get these results which are exactly the same in the book: 

    $n0c_1
    $n0c_2
    $n0c_3
    $n0c_4
    $n0c_5
    $n0c_6
    $n0c_7
    $n0c_8
    $n0c_9
    $n0c_10
Pxxxyz;
