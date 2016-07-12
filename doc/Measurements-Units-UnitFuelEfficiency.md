Measurements\Units\UnitFuelEfficiency
===============

The `UnitFuelEfficiency` class encapsulates units of measure for fuel efficiency.

You typically use instances of `UnitFuelEfficiency` to represent specific quantities of fuel efficiency using the `Measurement` class.

Fuel efficiency corresponds to the thermal efficiency of a process that converts the chemical potential energy of a fuel into kinetic energy.
Fuel efficiency can be expressed by SI derived units in terms of cubic meters per meter (m3/m), but is more commonly expressed in terms of liters per kilometer (L/km) and miles per gallon (mpg).

The base unit of `UnitFuelEfficiency` is defined as liters per 100 kilometers.


* Class name: UnitFuelEfficiency
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_LITERS_PER_100_KILOMETERS

    const SYMBOL_LITERS_PER_100_KILOMETERS = "L/100km"





### SYMBOL_MILES_PER_GALLON

    const SYMBOL_MILES_PER_GALLON = "mpg"





### SYMBOL_MILES_PER_IMPERIAL_GALLON

    const SYMBOL_MILES_PER_IMPERIAL_GALLON = "mpg"





### COEFFICIENT_LITERS_PER_100_KILOMETERS

    const COEFFICIENT_LITERS_PER_100_KILOMETERS = 1.0





### COEFFICIENT_MILES_PER_GALLON

    const COEFFICIENT_MILES_PER_GALLON = 235.215





### COEFFICIENT_MILES_PER_IMPERIAL_GALLON

    const COEFFICIENT_MILES_PER_IMPERIAL_GALLON = 282.481





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




### litersPer100Kilometers

    \Measurements\Units\UnitFuelEfficiency Measurements\Units\UnitFuelEfficiency::litersPer100Kilometers()

Returns the liter per 100 kilometers unit of fuel efficiency.



* Visibility: **public**
* This method is **static**.




### milesPerGallon

    \Measurements\Units\UnitFuelEfficiency Measurements\Units\UnitFuelEfficiency::milesPerGallon()

Returns the miles per gallon unit of fuel efficiency.



* Visibility: **public**
* This method is **static**.




### milesPerImperialGallon

    \Measurements\Units\UnitFuelEfficiency Measurements\Units\UnitFuelEfficiency::milesPerImperialGallon()

Returns the miles per imperial gallon unit of fuel efficiency.



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



