Measurements\Quantities\Volume
===============

The `Volume` class represents a specific quantities of volume.




* Class name: Volume
* Namespace: Measurements\Quantities
* Parent class: Measurements\Measurement







Methods
-------


### __construct

    mixed Measurements\Quantities\Volume::__construct(double $value, \Measurements\Unit $unit)

Initializes a new volume measurement with a specified floating-point value and unit.



* Visibility: **public**


#### Arguments
* $value **double** - &lt;p&gt;The measurement value.&lt;/p&gt;
* $unit **[Measurements\Unit](Measurements-Unit.md)** - &lt;p&gt;The unit of measure.&lt;/p&gt;



### fromEquivalentLengths

    \Measurements\Quantities\Volume Measurements\Quantities\Volume::fromEquivalentLengths(\Measurements\Quantities\Length $length)

Returns a volume measurement computed from a specified length.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;



### fromLengths

    \Measurements\Quantities\Volume Measurements\Quantities\Volume::fromLengths(\Measurements\Quantities\Length $length, \Measurements\Quantities\Length $width, \Measurements\Quantities\Length $height)

Returns a volume measurement computed from the specified length, width and height.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $length **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A length.&lt;/p&gt;
* $width **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A width.&lt;/p&gt;
* $height **[Measurements\Quantities\Length](Measurements-Quantities-Length.md)** - &lt;p&gt;A height.&lt;/p&gt;


