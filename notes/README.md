# Keywords

* Time
* Sun
* Moon
* Planets
* Earth

# Process

* Time conversion
* Angle conversion
    * 23°26'49" (Deg Minute Second) => 23.4469444°deg
        * A = 23°26'49"
        * A = 23 + (26 / 60) + (49 / 3600)
        * A = 23 + .433333 + .013611
        * A = 23.446944°deg
    * Degree Vs Radian : 1°deg = (PI / 180)°rad = .017453°rad
    * 1 hour = 15°deg
    
    
# Classes

Possible class structure :

* Astronomical
    * Converters:
        * Angle
            * toRad()
            * toDeg()
            * toTime()
        * Time
    * Interpolation
        * y = y2 + (n/2)(a + b + nc) if interpolation factor (n) between -1,+1
        * Extremum:
            * ym = y2 - ( (a + b)² / 8c )
            * nm = - ( (a + b) / 2c )
    
