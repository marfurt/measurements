Measurements\Quantities\Speed
===============

The `Speed` class represents a specific quantities of speed.




* Class name: Speed
* Namespace: Measurements\Quantities
* Parent class: Measurements\Measurement







Methods
-------


### __construct

    mixed Measurements\Quantities\Speed::__construct(double $value, \Measurements\Unit $unit)

Initializes a new speed measurement with a specified floating-point value and unit.



* Visibility: **public**


#### Arguments
* $value **double** - &lt;p&gt;The measurement value.&lt;/p&gt;
* $unit **[Measurements\Unit](Measurements-Unit.md)** - &lt;p&gt;The unit of measure.&lt;/p&gt;



### fromLengthAndDuration

    \Measurements\Quantities\Speed Measurements\Quantities\Speed::fromLengthAndDuration(\Measurements\Quantities\Length $length, \Measurements\Quantities\Duration $duration)

Returns a speed measurement computed from the specified length and duration.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;
* $duration **[Measurements\Quantities\Duration](Measurements-Quantities-Duration.md)** - &lt;p&gt;A duration.&lt;/p&gt;


