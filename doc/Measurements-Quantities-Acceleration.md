Measurements\Quantities\Acceleration
===============

The `Acceleration` class represents a specific quantities of acceleration.




* Class name: Acceleration
* Namespace: Measurements\Quantities
* Parent class: Measurements\Measurement







Methods
-------


### __construct

    mixed Measurements\Quantities\Acceleration::__construct(double $value, \Measurements\Unit $unit)

Initializes a new acceleration with a specified floating-point value and unit.



* Visibility: **public**


#### Arguments
* $value **double** - &lt;p&gt;The measurement value.&lt;/p&gt;
* $unit **[Measurements\Unit](Measurements-Unit.md)** - &lt;p&gt;The unit of measure.&lt;/p&gt;



### fromLengthAndDuration

    \Measurements\Quantities\Acceleration Measurements\Quantities\Acceleration::fromLengthAndDuration(\Measurements\Quantities\Length $length, \Measurements\Quantities\Duration $duration)

Returns an acceleration measurement computed from the specified length and duration.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;
* $duration **[Measurements\Quantities\Duration](Measurements-Quantities-Duration.md)** - &lt;p&gt;A duration.&lt;/p&gt;


