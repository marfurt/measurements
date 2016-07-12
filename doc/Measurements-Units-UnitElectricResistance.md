Measurements\Units\UnitElectricResistance
===============

The `UnitElectricResistance` class encapsulates units of measure for electric resistance.

You typically use instances of `UnitElectricResistance` to represent specific quantities of electric resistance using the `Measurement` class.

Electric resistance is the difficulty of passing an electric current through a conductor.
The SI unit for electric resistance is the ohm (Ω), which is derived as the electric resistance that produces one ampere of current between two points in conductor with one volt of electric resistance (1Ω = 1V/1A).

The base unit of `UnitElectricResistance` is defined as coulombs.


* Class name: UnitElectricResistance
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_MEGAOHMS

    const SYMBOL_MEGAOHMS = "MΩ"





### SYMBOL_KILOOHMS

    const SYMBOL_KILOOHMS = "kΩ"





### SYMBOL_OHMS

    const SYMBOL_OHMS = "Ω"





### SYMBOL_MILLIOHMS

    const SYMBOL_MILLIOHMS = "mΩ"





### SYMBOL_MICROOHMS

    const SYMBOL_MICROOHMS = "µΩ"





### COEFFICIENT_MEGAOHMS

    const COEFFICIENT_MEGAOHMS = 1000000.0





### COEFFICIENT_KILOOHMS

    const COEFFICIENT_KILOOHMS = 1000.0





### COEFFICIENT_OHMS

    const COEFFICIENT_OHMS = 1.0





### COEFFICIENT_MILLIOHMS

    const COEFFICIENT_MILLIOHMS = 0.001





### COEFFICIENT_MICROOHMS

    const COEFFICIENT_MICROOHMS = 1.0E-6





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




### megaohms

    \Measurements\Units\UnitElectricResistance Measurements\Units\UnitElectricResistance::megaohms()

Returns the megaohms unit of electric resistance.



* Visibility: **public**
* This method is **static**.




### kiloohms

    \Measurements\Units\UnitElectricResistance Measurements\Units\UnitElectricResistance::kiloohms()

Returns the kiloohms unit of electric resistance.



* Visibility: **public**
* This method is **static**.




### ohms

    \Measurements\Units\UnitElectricResistance Measurements\Units\UnitElectricResistance::ohms()

Returns the ohms unit of electric resistance.



* Visibility: **public**
* This method is **static**.




### milliohms

    \Measurements\Units\UnitElectricResistance Measurements\Units\UnitElectricResistance::milliohms()

Returns the milliohms unit of electric resistance.



* Visibility: **public**
* This method is **static**.




### microohms

    \Measurements\Units\UnitElectricResistance Measurements\Units\UnitElectricResistance::microohms()

Returns the microohms unit of electric resistance.



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



