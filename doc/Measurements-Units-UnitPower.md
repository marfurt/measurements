Measurements\Units\UnitPower
===============

The `UnitPower` class encapsulates units of measure for power.

You typically use instances of `UnitPower` to represent specific quantities of power using the `Measurement` class.

Power is the amount of energy used over time. The SI unit for power is the watt (W), which is derived as one joule per second (1W = 1J / 1s).

The base unit of `UnitPower` is defined as watts.


* Class name: UnitPower
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_TERAWATTS

    const SYMBOL_TERAWATTS = "TW"





### SYMBOL_GIGAWATTS

    const SYMBOL_GIGAWATTS = "GW"





### SYMBOL_MEGAWATTS

    const SYMBOL_MEGAWATTS = "MW"





### SYMBOL_KILOWATTS

    const SYMBOL_KILOWATTS = "kW"





### SYMBOL_WATTS

    const SYMBOL_WATTS = "W"





### SYMBOL_MILLIWATTS

    const SYMBOL_MILLIWATTS = "mW"





### SYMBOL_MICROWATTS

    const SYMBOL_MICROWATTS = "µW"





### SYMBOL_NANOWATTS

    const SYMBOL_NANOWATTS = "nW"





### SYMBOL_PICOWATTS

    const SYMBOL_PICOWATTS = "pW"





### SYMBOL_FEMTOWATTS

    const SYMBOL_FEMTOWATTS = "fW"





### SYMBOL_HORSE_POWER

    const SYMBOL_HORSE_POWER = "hp"





### COEFFICIENT_TERAWATTS

    const COEFFICIENT_TERAWATTS = 1000000000000.0





### COEFFICIENT_GIGAWATTS

    const COEFFICIENT_GIGAWATTS = 1000000000.0





### COEFFICIENT_MEGAWATTS

    const COEFFICIENT_MEGAWATTS = 1000000.0





### COEFFICIENT_KILOWATTS

    const COEFFICIENT_KILOWATTS = 1000.0





### COEFFICIENT_WATTS

    const COEFFICIENT_WATTS = 1.0





### COEFFICIENT_MILLIWATTS

    const COEFFICIENT_MILLIWATTS = 0.001





### COEFFICIENT_MICROWATTS

    const COEFFICIENT_MICROWATTS = 1.0E-6





### COEFFICIENT_NANOWATTS

    const COEFFICIENT_NANOWATTS = 1.0E-9





### COEFFICIENT_PICOWATTS

    const COEFFICIENT_PICOWATTS = 1.0E-12





### COEFFICIENT_FEMTOWATTS

    const COEFFICIENT_FEMTOWATTS = 1.0E-15





### COEFFICIENT_HORSE_POWER

    const COEFFICIENT_HORSE_POWER = 745.7





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




### terawatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::terawatts()

Returns the terawatts unit of power.



* Visibility: **public**
* This method is **static**.




### gigawatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::gigawatts()

Returns the gigawatts unit of power.



* Visibility: **public**
* This method is **static**.




### megawatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::megawatts()

Returns the megawatts unit of power.



* Visibility: **public**
* This method is **static**.




### kilowatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::kilowatts()

Returns the kilowatts unit of power.



* Visibility: **public**
* This method is **static**.




### watts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::watts()

Returns the watts unit of power.



* Visibility: **public**
* This method is **static**.




### milliwatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::milliwatts()

Returns the milliwatts unit of power.



* Visibility: **public**
* This method is **static**.




### microwatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::microwatts()

Returns the microwatts unit of power.



* Visibility: **public**
* This method is **static**.




### nanowatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::nanowatts()

Returns the nanowatts unit of power.



* Visibility: **public**
* This method is **static**.




### picowatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::picowatts()

Returns the picowatts unit of power.



* Visibility: **public**
* This method is **static**.




### femtowatts

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::femtowatts()

Returns the femtowatts unit of power.



* Visibility: **public**
* This method is **static**.




### horsepower

    \Measurements\Units\UnitPower Measurements\Units\UnitPower::horsepower()

Returns the horsepower unit of power.



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



