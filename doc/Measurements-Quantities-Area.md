Measurements\Quantities\Area
===============

The `Area` class represents a specific quantities of area.




* Class name: Area
* Namespace: Measurements\Quantities
* Parent class: Measurements\Measurement







Methods
-------


### __construct

    mixed Measurements\Quantities\Area::__construct(double $value, \Measurements\Unit $unit)

Initializes a new speed with a specified floating-point value and unit.



* Visibility: **public**


#### Arguments
* $value **double** - &lt;p&gt;The measurement value.&lt;/p&gt;
* $unit **[Measurements\Unit](Measurements-Unit.md)** - &lt;p&gt;The unit of measure.&lt;/p&gt;



### fromEquivalentLengths

    \Measurements\Quantities\Area Measurements\Quantities\Area::fromEquivalentLengths(\Measurements\Quantities\Length $length)

Returns the area measurement computed from the specified length.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;



### fromLengthAndWidth

    \Measurements\Quantities\Area Measurements\Quantities\Area::fromLengthAndWidth(\Measurements\Quantities\Length $length, \Measurements\Quantities\Length $width)

Returns the area measurement computed from the specified length and width.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;
* $width **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A width.&lt;/p&gt;


