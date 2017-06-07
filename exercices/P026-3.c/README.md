# Astronomical Exercice 3.c, Page 026

## Context : 

    f(x) = (......)
    
    We are looking for f(x) = 0
    
    
## Exercises :

Given the following values for the declination of Mercury :

    1973 February 26.0 TD   -0°28'13.4"
    1973 February 27.0 TD   +0°06'46.3"
    1973 February 28.0 TD   +0°38'23.2"
    
    
Calculate when the planet's declination was zero.

Firstly, we convert the tabulated values into seconds of a degrees

    -0°28'13.4" = -0.47038888888889°deg = -1693.4 second of degree
    +0°06'46.3" =  0.11286111111111°deg =   406.3 second of degree
    +0°38'23.2" =  0.63977777777778°deg =  2303.2 second of degree
    
And the differences

    y1 = -1693.4
                    a = 2099.7
    y2 = 406.3                     c = -202.8
                    b = 1896.9
    y3 = 2303.2
    

Interpolation Factor corresponding to zero of the function is given with the following formula

    n0 = (-2y2) / (a + b + cn0)
    
    n0 = (-2 * 406.3) / (2099.7 + 1896.9 + -202.8 * n0)
    n0 =  -812.6 / 3996.6 + -202.8n0
    
Putting n0 = 0 in the second member

    n0 = -812.6 / (3996.6 + (-202.8 * 0))
    n0 = -812.6 / 3996.6
    n0 = -0.20332282440074; [Excepeted : -0.20332]
    

Repeating the calculation with n0 = `-0.20332282440074` in second member

    n0 = 406.3 / (3996.6 + (-202.8 * -0.20332282440074))
    n0 = -0.20124651642585; [Excepeted : -0.20125]
    

Repeating the calculation with n0 = `-0.20124651642585` in second member

    n0 = 406.3 / (3996.6 + (-202.8 * -0.20124651642585))
    n0 = -0.20126750509682; [Excepeted : -0.20127]

Hence, n0 = `-0.20126750509682` and therefore, the tabular interval being one day, Mercury crossed the celestial equator on :

    1973 February 27.0 TD + -0.20126750509682 = 26.798732494903 = 1973 February 26 TD at 19h10m629s.