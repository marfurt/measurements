Measurements\Units\UnitElectricCharge
===============

The `UnitElectricCharge` class encapsulates units of measure for electric charge.

You typically use instances of `UnitElectricCharge` to represent specific quantities of electric charge using the `Measurement` class.

Electric charge is a fundamental physical property of matter that causes it to experience a force within an electromagnetic field.
The SI unit for electric charge is the coulomb (C), which is defined as the amount of charge carried by a current of one ampere in one second (1C = 1A · 1s).
Charge is also commonly expressed in terms of ampere hours (Ah).

The base unit of `UnitElectricCharge` is defined as coulombs.


* Class name: UnitElectricCharge
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_COULOMBS

    const SYMBOL_COULOMBS = "C"





### SYMBOL_MEGAAMPERE_HOURS

    const SYMBOL_MEGAAMPERE_HOURS = "MAh"





### SYMBOL_KILOAMPERE_HOURS

    const SYMBOL_KILOAMPERE_HOURS = "kAh"





### SYMBOL_AMPERE_HOURS

    const SYMBOL_AMPERE_HOURS = "Ah"





### SYMBOL_MILLIAMPERE_HOURS

    const SYMBOL_MILLIAMPERE_HOURS = "mAh"





### SYMBOL_MICROAMPERE_HOURS

    const SYMBOL_MICROAMPERE_HOURS = "µAh"





### COEFFICIENT_COULOMBS

    const COEFFICIENT_COULOMBS = 1.0





### COEFFICIENT_MEGAAMPERE_HOURS

    const COEFFICIENT_MEGAAMPERE_HOURS = 3600000000.0





### COEFFICIENT_KILOAMPERE_HOURS

    const COEFFICIENT_KILOAMPERE_HOURS = 3600000.0





### COEFFICIENT_AMPERE_HOURS

    const COEFFICIENT_AMPERE_HOURS = 3600.0





### COEFFICIENT_MILLIAMPERE_HOURS

    const COEFFICIENT_MILLIAMPERE_HOURS = 3.6





### COEFFICIENT_MICROAMPERE_HOURS

    const COEFFICIENT_MICROAMPERE_HOURS = 0.0036





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




### coulombs

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::coulombs()

Returns the coulombs unit of electric charge.



* Visibility: **public**
* This method is **static**.




### megaampereHours

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::megaampereHours()

Returns the megaampere hours unit of electric charge.



* Visibility: **public**
* This method is **static**.




### kiloampereHours

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::kiloampereHours()

Returns the kiloampere hours unit of electric charge.



* Visibility: **public**
* This method is **static**.




### ampereHours

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::ampereHours()

Returns the ampere hours unit of electric charge.



* Visibility: **public**
* This method is **static**.




### milliampereHours

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::milliampereHours()

Returns the milliampere hours unit of electric charge.



* Visibility: **public**
* This method is **static**.




### microampereHours

    \Measurements\Units\UnitElectricCharge Measurements\Units\UnitElectricCharge::microampereHours()

Returns the microampere hours unit of electric charge.



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



