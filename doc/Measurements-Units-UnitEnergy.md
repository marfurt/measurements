Measurements\Units\UnitEnergy
===============

The `UnitEnergy` class encapsulates units of measure for energy.

You typically use instances of `UnitEnergy` to represent specific quantities of energy using the `Measurement` class.

Energy is a fundamental property of matter than can be transferred and converted into different forms, such as kinetic, electric, and thermal.
The SI unit for energy is the joule (J), which is derived as the work of one meter of displacement in the direction of a force of one newton (1J = 1N ∙ 1m).
It can also be derived as the work required to displace an electric charge of one coulomb through an electrical potential difference of one volt (1J = 1C ∙ 1V), or the work required to produce one watt of power for one second (1J = 1W ∙ 1s). Energy is also commonly expressed in terms of the calorie (cal), or the energy needed to raise the temperature of one gram of water by one degree Celsius at a pressure of one atmosphere (1cal ≡ 4.184J).

The base unit of `UnitEnergy` is defined as joules.


* Class name: UnitEnergy
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_KILOJOULES

    const SYMBOL_KILOJOULES = "KJ"





### SYMBOL_JOULES

    const SYMBOL_JOULES = "J"





### SYMBOL_KILOCALORIES

    const SYMBOL_KILOCALORIES = "kCal"





### SYMBOL_CALORIES

    const SYMBOL_CALORIES = "cal"





### SYMBOL_KILOWATT_HOURS

    const SYMBOL_KILOWATT_HOURS = "kWh"





### COEFFICIENT_KILOJOULES

    const COEFFICIENT_KILOJOULES = 1000.0





### COEFFICIENT_JOULES

    const COEFFICIENT_JOULES = 1.0





### COEFFICIENT_KILOCALORIES

    const COEFFICIENT_KILOCALORIES = 4184.0





### COEFFICIENT_CALORIES

    const COEFFICIENT_CALORIES = 4.184





### COEFFICIENT_KILOWATT_HOURS

    const COEFFICIENT_KILOWATT_HOURS = 3600000.0





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




### kilojoules

    \Measurements\Units\UnitEnergy Measurements\Units\UnitEnergy::kilojoules()

Returns the kilojoules unit of energy.



* Visibility: **public**
* This method is **static**.




### joules

    \Measurements\Units\UnitEnergy Measurements\Units\UnitEnergy::joules()

Returns the joules unit of energy.



* Visibility: **public**
* This method is **static**.




### kilocalories

    \Measurements\Units\UnitEnergy Measurements\Units\UnitEnergy::kilocalories()

Returns the kilocalories unit of energy.



* Visibility: **public**
* This method is **static**.




### calories

    \Measurements\Units\UnitEnergy Measurements\Units\UnitEnergy::calories()

Returns the calories unit of energy.



* Visibility: **public**
* This method is **static**.




### kilowattHours

    \Measurements\Units\UnitEnergy Measurements\Units\UnitEnergy::kilowattHours()

Returns the kilowatt hours unit of energy.



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



