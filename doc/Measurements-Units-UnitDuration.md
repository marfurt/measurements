Measurements\Units\UnitDuration
===============

The `UnitDuration` class encapsulates units of measure for duration of time.

You typically use instances of `UnitDuration` to represent specific quantities of planar angle using the `Measurement` class.

Duration is a quantity of time. The SI unit for time is the second (sec). Duration is also commonly expressed in terms of minutes (min) and hours (hr).

The base unit of `UnitDuration` is defined as seconds.


* Class name: UnitDuration
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_SECONDS

    const SYMBOL_SECONDS = "sec"





### SYMBOL_MINUTES

    const SYMBOL_MINUTES = "min"





### SYMBOL_HOURS

    const SYMBOL_HOURS = "hr"





### COEFFICIENT_SECONDS

    const COEFFICIENT_SECONDS = 1.0





### COEFFICIENT_MINUTES

    const COEFFICIENT_MINUTES = 60.0





### COEFFICIENT_HOURS

    const COEFFICIENT_HOURS = 3600.0





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




### seconds

    \Measurements\Units\UnitDuration Measurements\Units\UnitDuration::seconds()

Returns the second unit of duration.



* Visibility: **public**
* This method is **static**.




### minutes

    \Measurements\Units\UnitDuration Measurements\Units\UnitDuration::minutes()

Returns the minute unit of duration.



* Visibility: **public**
* This method is **static**.




### hours

    \Measurements\Units\UnitDuration Measurements\Units\UnitDuration::hours()

Returns the hour unit of duration.



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



