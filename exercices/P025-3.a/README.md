# Astronomical Exercise 3.a, Page 025

## Context : 

    f(x) = (......)
    
    x is Time and we are looking for known date.
    y = f(x) is value we want to get
    

## Exercise

From table (3.2), calculate the distance of Mars to Earth on 1992 November 8, at 4h21m TD.

### Table 3.2 :

    November 7 y1 = 0.884 226 AU
    November 8 y2 = 0.877 366 AU
    November 9 y3 = 0.870 531 AU

Interpolation formula is for interval n in [-1,+1] : 

    y = y2 + (n/2)(a + b + nc)

We have :

    4h21m = 4h + (21/60)h = 4.35h 
    
and, since the tabular interval is 1 day or 24 hours :

    n = 4.35h / 24h = 0.18125

With formula : 

    y = 0.877 366 + (0.18125/2)((0.877 366 - 0.884 226) + (0.870 531 - 0.877 366) + n * ((0.870 531 - 0.877 366) - (0.877 366 - 0.884 226)))
    y = 0.877366 + (0.18125 / 2)(-0.00686 + -0.0068349999999999 + 0.18125 * 2.5000000000053E-5)
    y = 0.87612530126953 (Excepted : 0.876 125)