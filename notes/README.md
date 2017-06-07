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
            
            
# Formulas

## Interpolation :: Interpolated value with known factor

    y = y2 + (n / 2)(a + b + nc)
    
## Interpolation :: Interpolation value with unknown factor

### Interpolated value :

    ym = y2 - ( (a + b)² / 8c )
    
### Interpolation factor :

    nm = -1 * (a + b) / 2c
    
## Interpolation :: Interpolation factor when value is zero

Excellent when, the function is 'almost a straight line'

    n0 = -2y2 / (a + b + cn0)
    
When the curvature of the function is important, use of the formula may require a large number of iteration, it can lead to divergence even when starting from an almost correct value for n0. Int this cas, a better method for calculating n0 is as follow : the correction to the assumed value of n0 is :

    Δn0 = -1 ( (2y2 + n0(a + b + cn0) ) / (a + b + 2cn0) )
    
The calculation should be repeated, using the new value of n0 unit n0 no longer varies.

