Measurements\Units\UnitElectricPotentialDifference
===============

The `UnitElectricPotentialDifference` class encapsulates units of measure for electric potential difference.

You typically use instances of `UnitElectricPotentialDifference` to represent specific quantities of electric potential difference using the `Measurement` class.

Electric potential difference is the amount of electric potential energy of a point charge at a point in space.
The SI unit for electric potential difference is the volt (V), which is derived as the difference in electric potential energy between two points of a linear conductor when an electric current of one ampere dissipates one watt of power between those points (1V = 1W/1A).

The base unit of `UnitElectricPotentialDifference` is defined as volts.


* Class name: UnitElectricPotentialDifference
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_MEGAVOLTS

    const SYMBOL_MEGAVOLTS = "MV"





### SYMBOL_KILOVOLTS

    const SYMBOL_KILOVOLTS = "kV"





### SYMBOL_VOLTS

    const SYMBOL_VOLTS = "V"





### SYMBOL_MILLIVOLTS

    const SYMBOL_MILLIVOLTS = "mV"





### SYMBOL_MICROVOLTS

    const SYMBOL_MICROVOLTS = "µV"





### COEFFICIENT_MEGAVOLTS

    const COEFFICIENT_MEGAVOLTS = 1000000.0





### COEFFICIENT_KILOVOLTS

    const COEFFICIENT_KILOVOLTS = 1000.0





### COEFFICIENT_VOLTS

    const COEFFICIENT_VOLTS = 1.0





### COEFFICIENT_MILLIVOLTS

    const COEFFICIENT_MILLIVOLTS = 0.001





### COEFFICIENT_MICROVOLTS

    const COEFFICIENT_MICROVOLTS = 1.0E-6





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




### megavolts

    \Measurements\Units\UnitElectricPotentialDifference Measurements\Units\UnitElectricPotentialDifference::megavolts()

Returns the megavolts unit of electric potential difference.



* Visibility: **public**
* This method is **static**.




### kilovolts

    \Measurements\Units\UnitElectricPotentialDifference Measurements\Units\UnitElectricPotentialDifference::kilovolts()

Returns the kilovolts unit of electric potential difference.



* Visibility: **public**
* This method is **static**.




### volts

    \Measurements\Units\UnitElectricPotentialDifference Measurements\Units\UnitElectricPotentialDifference::volts()

Returns the volts unit of electric potential difference.



* Visibility: **public**
* This method is **static**.




### millivolts

    \Measurements\Units\UnitElectricPotentialDifference Measurements\Units\UnitElectricPotentialDifference::millivolts()

Returns the millivolts unit of electric potential difference.



* Visibility: **public**
* This method is **static**.




### microvolts

    \Measurements\Units\UnitElectricPotentialDifference Measurements\Units\UnitElectricPotentialDifference::microvolts()

Returns the microvolts unit of electric potential difference.



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



