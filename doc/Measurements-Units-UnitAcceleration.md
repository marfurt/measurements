Measurements\Units\UnitAcceleration
===============

The `UnitAcceleration` class encapsulates units of measure for acceleration.

You typically use instances of `UnitAcceleration` to represent specific quantities of acceleration using the `Measurement class.

Acceleration is the rate of change of velocity. Acceleration can be expressed by SI derived units in terms of meters per second squared (m/s²).

The base unit of `UnitAcceleration` is defined as meters per second squared.


* Class name: UnitAcceleration
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_METERS_PER_SECONDS_SQUARED

    const SYMBOL_METERS_PER_SECONDS_SQUARED = "m/s²"





### SYMBOL_GRAVITY

    const SYMBOL_GRAVITY = "g"





### COEFFICIENT_METERS_PER_SECONDS_SQUARED

    const COEFFICIENT_METERS_PER_SECONDS_SQUARED = 1.0





### COEFFICIENT_GRAVITY

    const COEFFICIENT_GRAVITY = 9.81





Properties
----------


### $converter

    protected \Measurements\UnitConverter $converter

The converter used to represent the unit in terms of the dimension's base unit.



* Visibility: **protected**


### $symbol

    protected string $symbol

The symbolic representation of the unit.



* Visibility: **protected**


Methods
-------


### baseUnit

    mixed Measurements\BaseUnitConvertible::baseUnit()

Returns the base unit of the dimension.



* Visibility: **public**
* This method is **static**.
* This method is defined by [Measurements\BaseUnitConvertible](Measurements-BaseUnitConvertible.md)




### metersPerSecondSquared

    \Measurements\Units\UnitAcceleration Measurements\Units\UnitAcceleration::metersPerSecondSquared()

Returns the meter per second squared unit of acceleration.



* Visibility: **public**
* This method is **static**.




### gravity

    \Measurements\Units\UnitAcceleration Measurements\Units\UnitAcceleration::gravity()

Returns the gravity unit of acceleration.



* Visibility: **public**
* This method is **static**.




### __construct

    mixed Measurements\Unit::__construct(string $symbol)

Initializes a new unit with the specified symbol.



* Visibility: **public**
* This method is defined by [Measurements\Unit](Measurements-Unit.md)


#### Arguments
* $symbol **string** - &lt;p&gt;The symbolic representation of the unit.&lt;/p&gt;



### converter

    \Measurements\UnitConverter Measurements\Dimension::converter()

Returns the unit converter used to represent the unit in terms of the dimension's base unit.



* Visibility: **public**
* This method is defined by [Measurements\Dimension](Measurements-Dimension.md)




### getBaseUnit

    mixed Measurements\Dimension::getBaseUnit()

Returns the base unit of the dimension.



* Visibility: **public**
* This method is defined by [Measurements\Dimension](Measurements-Dimension.md)




### symbol

    string Measurements\Unit::symbol()

Return the symbolic representation of the unit.



* Visibility: **public**
* This method is defined by [Measurements\Unit](Measurements-Unit.md)




### isEqualTo

    boolean Measurements\Equatable::isEqualTo(mixed $other)

Returns a boolean value that indicates whether the receiver is equal to another given object.



* Visibility: **public**
* This method is defined by [Measurements\Equatable](Measurements-Equatable.md)


#### Arguments
* $other **mixed** - &lt;p&gt;The object with which to compare the receiver.&lt;/p&gt;



### __toString

    string Measurements\Unit::__toString()

Converts the unit to its string representation.



* Visibility: **public**
* This method is defined by [Measurements\Unit](Measurements-Unit.md)



