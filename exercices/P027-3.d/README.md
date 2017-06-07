 # Astronomical Exercice 3.d, Page 027

## Context :

    f(x) = -3x² + 2x + 3
    

## Exercise : 

Consider the following values of a function :

    x1 = -1     and y1 = -2
    x2 =  0     and y2 =  3
    x3 =  1     and y3 =  2
    
There is a strong curvature between x = -1 and x = +1.

First, the differences:

    a = 5
             c = -6
    b = -1

With Interpolation factor formula for linear function :

    n0 = -2y2 / (a + b + cn0)    
    
Starting with n0 = 0, below successively results :

    Iteration 01 = -1.5
    Iteration 02 = -0.46153846153846
    Iteration 03 = -0.88636363636364
    Iteration 04 = -0.64390243902439
    Iteration 05 = -0.76302729528536
    Iteration 06 = -0.699450390512
    Iteration 07 = -0.73200169395822
    Iteration 08 = -0.71496576897845
    Iteration 09 = -0.72378150237409
    Iteration 10 = -0.71919257564982
    Iteration 11 = -0.72157400222586
    Iteration 12 = -0.72033619415411
    Iteration 13 = -0.72097904643703
    Iteration 14 = -0.72064503969341
    Iteration 15 = -0.72081854093463
    Iteration 16 = -0.72072840454192
    Iteration 17 = -0.72077522888191
    Iteration 18 = -0.72075090366549
    Iteration 19 = -0.72076354039584
    Iteration 20 = -0.72075697567319
    Iteration 21 = -0.72076038600115
    Iteration 22 = -0.72075861435536
    Iteration 23 = -0.72075953471409
    Iteration 24 = -0.72075905659329
    Iteration 25 = -0.72075930497408
    Iteration 26 = -0.72075917594178
    Iteration 27 = -0.72075924297326
    Iteration 28 = -0.72075920815082
    Iteration 29 = -0.72075922624086
    Iteration 30 = -0.72075921684319
    
The correct value of the sixth decimal is obtain after **not less** than 24 iterations.


With Interpolation factor formula for curved function give by Meeus :

    Δn0 = -1 * ( (2y2 + (a + b + cn0) ) / (a + b + 2cn0) )
    
Starting with n0 = 0, below successively results :

    Iteration 01 = -1.5
    Iteration 02 = 0.61363636363636
    Iteration 03 = 1.8418304668305
    Iteration 04 = -0.38596443599413
    Iteration 05 = -0.41270935033399
    Iteration 06 = -0.37164859156024
    Iteration 07 = -0.43555130635241
    Iteration 08 = -0.33810502585859
    Iteration 09 = -0.49169192665088
    Iteration 10 = -0.26086742574847
    
Results are not those which was expected in books.
Something is missing in explanation
With these two values I find one explanation :

    Iteration 01 = -1.5
    Iteration 02 = 0.61363636363636
    
For iteration number one, it's easy, n0 = 0.

For iteration number two, I saw -1.5 + 0.61363636363636 = -0.88636363636364

The result is exactly what we expected for iteration 2 in book.

Please find my proposed explanation :

    •1. Given formula :
    
                      2y2 + n0 ( a + b + cn0 )
        Δn0 = -1 * ------------------------------ 
                           a + b + 2cn0
    
    
    •2. What I supposed :
    
        Δn0 = n0 - n0-1
        
    
    •3. Manipulations :
    
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

    Iteration 01 = -0.89872976219944
    Iteration 02 = -0.73361307225965
    Iteration 03 = -0.72083664733626
    Iteration 04 = -0.72075922289959
    Iteration 05 = -0.72075922005613
    Iteration 06 = -0.72075922005613
    Iteration 07 = -0.72075922005613
    Iteration 08 = -0.72075922005613
    Iteration 09 = -0.72075922005613
    Iteration 10 = -0.72075922005613
    
    
So the twelfth decimal is correctly obtained with only six iteration in this case.