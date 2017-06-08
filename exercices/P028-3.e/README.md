# Astronomical Exercice 3.e, Page 028

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

    A = -11.519
                E = 2.399
    B = -9.12              H = -0.071
                F = 2.328          K = -0.026
    C = -6.792             J = -0.097
                G = 2.231
    D = -4.561
                   

We see that the third differences (H and J) may no be neglected, unless an accuracy of about 0.1" is sufficient.

Let us now calculate the Monn's parallax on **February 28 at 3h20m TD**.

The tabular interval being 12 hours. We have :

         3h20m     3*60 + 20      200
    n = ------- = ----------- = ------- = 0.27777777777778
          12h        12*60        720
          

Calculate y with formula where n = **0.27777777777778** :
     
     
                 B + C     H + J            12F - K             H + J             K
    y = y3 + n( ------- - ------- ) + n² ( --------- ) + n^3 ( ------- ) + n^4 ( ---- )
                   2        12                 24                12               24
                   
    y = 3255.486 + 0.27777777777778 ( (( -9.12 + -6.792) / 2) - (-0.071 + -0.097) / 12) + 0.27777777777778² ( (12 * 2.328 - -0.026) / 24) + 0.27777777777778^3 ( (-0.071 + -0.097) / 12) + 0.27777777777778^4 (-0.026 / 24) 
    
    y = 3253.3694807758'
    
    y = 54'13.369" [Expected : 54'13.369"]
    
    
The unit factor `n` doesn't matter because it's a coefficient obtain a division.

Indeed :

    In hours :
    
         3h20m     3h + (20m / 60m)h     3.333 333h
    n = ------- = ------------------- = ------------ = 0.277 7778
          12h             12h               12h
          
    
    In minutes :
    
         3h20m     (3h * 60m)m + 20m      200
    n = ------- = -------------------- = ----- = 0.277 7778
          12h          (12h * 60m)m       720
          
    
    In Seconds :
    
         3h20m     (3h * 3600s)s + (20m * 60s)s     12000
    n = ------- = ------------------------------ = ------- = 0.277 7778
          12h               (12h * 3660s)s          43200