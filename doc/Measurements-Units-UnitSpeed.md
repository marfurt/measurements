Measurements\Units\UnitSpeed
===============

The `UnitSpeed` class encapsulates units of measure for speed.

You typically use instances of `UnitSpeed` to represent specific quantities of speed using the `Measurement` class.

Speed is the magnitude of velocity, or the rate of change of position.
Speed can be expressed by SI derived units in terms of meters per second (m/s), and is also commonly expressed in terms of kilometers per hour (km/h) and miles per hour (mph).

The base unit of `UnitSpeed` is defined as meters per second.


* Class name: UnitSpeed
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_METERS_PER_SECOND

    const SYMBOL_METERS_PER_SECOND = "m/s"





### SYMBOL_KILOMETERS_PER_HOUR

    const SYMBOL_KILOMETERS_PER_HOUR = "km/h"





### SYMBOL_MILES_PER_HOUR

    const SYMBOL_MILES_PER_HOUR = "mph"





### SYMBOL_KNOTS

    const SYMBOL_KNOTS = "kn"





### COEFFICIENT_METERS_PER_SECOND

    const COEFFICIENT_METERS_PER_SECOND = 1.0





### COEFFICIENT_KILOMETERS_PER_HOUR

    const COEFFICIENT_KILOMETERS_PER_HOUR = 0.277778





### COEFFICIENT_MILES_PER_HOUR

    const COEFFICIENT_MILES_PER_HOUR = 0.44704





### COEFFICIENT_KNOTS

    const COEFFICIENT_KNOTS = 0.514444





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




### metersPerSecond

    \Measurements\Units\UnitSpeed Measurements\Units\UnitSpeed::metersPerSecond()

Returns the meters per second unit of speed.



* Visibility: **public**
* This method is **static**.




### kilometersPerHour

    \Measurements\Units\UnitSpeed Measurements\Units\UnitSpeed::kilometersPerHour()

Returns the kilometers per second unit of speed.



* Visibility: **public**
* This method is **static**.




### milesPerHour

    \Measurements\Units\UnitSpeed Measurements\Units\UnitSpeed::milesPerHour()

Returns the miles per hours unit of speed.



* Visibility: **public**
* This method is **static**.




### knots

    \Measurements\Units\UnitSpeed Measurements\Units\UnitSpeed::knots()

Returns the knots unit of speed.



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



