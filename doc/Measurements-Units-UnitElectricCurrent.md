Measurements\Units\UnitElectricCurrent
===============

The `UnitElectricCurrent` class encapsulates units of measure for electric current.

You typically use instances of `UnitElectricCurrent` to represent specific quantities of electric current using the `Measurement` class.

Electric current is the flow of electric current. The SI unit for electric current is the ampere (A), which is defined in terms the production of electromagnetic force between two parallel linear conductors.
It can also be expressed as the flow of one coulomb per second (1A = 1C / s).

The base unit of `UnitElectricCurrent` is defined as amperes.


* Class name: UnitElectricCurrent
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_MEGAAMPERES

    const SYMBOL_MEGAAMPERES = "MA"





### SYMBOL_KILOAMPERES

    const SYMBOL_KILOAMPERES = "kA"





### SYMBOL_AMPERES

    const SYMBOL_AMPERES = "A"





### SYMBOL_MILLIAMPERES

    const SYMBOL_MILLIAMPERES = "mA"





### SYMBOL_MICROAMPERES

    const SYMBOL_MICROAMPERES = "µA"





### COEFFICIENT_MEGAAMPERES

    const COEFFICIENT_MEGAAMPERES = 1000000.0





### COEFFICIENT_KILOAMPERES

    const COEFFICIENT_KILOAMPERES = 1000.0





### COEFFICIENT_AMPERES

    const COEFFICIENT_AMPERES = 1.0





### COEFFICIENT_MILLIAMPERES

    const COEFFICIENT_MILLIAMPERES = 0.001





### COEFFICIENT_MICROAMPERES

    const COEFFICIENT_MICROAMPERES = 1.0E-6





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




### megaamperes

    \Measurements\Units\UnitElectricCurrent Measurements\Units\UnitElectricCurrent::megaamperes()

Returns the megaamperes unit of electric current.



* Visibility: **public**
* This method is **static**.




### kiloamperes

    \Measurements\Units\UnitElectricCurrent Measurements\Units\UnitElectricCurrent::kiloamperes()

Returns the kiloamperes unit of electric current.



* Visibility: **public**
* This method is **static**.




### amperes

    \Measurements\Units\UnitElectricCurrent Measurements\Units\UnitElectricCurrent::amperes()

Returns the amperes unit of electric current.



* Visibility: **public**
* This method is **static**.




### milliamperes

    \Measurements\Units\UnitElectricCurrent Measurements\Units\UnitElectricCurrent::milliamperes()

Returns the milliamperes unit of electric current.



* Visibility: **public**
* This method is **static**.




### microamperes

    \Measurements\Units\UnitElectricCurrent Measurements\Units\UnitElectricCurrent::microamperes()

Returns the microamperes unit of electric current.



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



