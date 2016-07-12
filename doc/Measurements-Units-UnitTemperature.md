Measurements\Units\UnitTemperature
===============

The `UnitTemperature` class encapsulates units of measure for temperature.

You typically use instances of `UnitTemperature` to represent specific quantities of temperature using the `Measurement` class.

Temperature is a comparative measure of thermal energy.
The SI unit for temperature is the kelvin (K), which is defined in terms of the triple point of water.
Temperature is also commonly measured by degrees of various scales, including Celsius (°C) and Fahrenheit (°F).

The base unit of `UnitTemperature` is defined as kelvin.


* Class name: UnitTemperature
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_KELVIN

    const SYMBOL_KELVIN = "K"





### SYMBOL_DEGREES_CELSIUS

    const SYMBOL_DEGREES_CELSIUS = "°C"





### SYMBOL_DEGREES_FAHRENHEIT

    const SYMBOL_DEGREES_FAHRENHEIT = "°F"





### COEFFICIENT_KELVIN

    const COEFFICIENT_KELVIN = 1.0





### COEFFICIENT_DEGREES_CELSIUS

    const COEFFICIENT_DEGREES_CELSIUS = 1.0





### COEFFICIENT_DEGREES_FAHRENHEIT

    const COEFFICIENT_DEGREES_FAHRENHEIT = 5.0 / 9.0





### CONSTANT_DEGREES_CELSIUS

    const CONSTANT_DEGREES_CELSIUS = 273.15





### CONSTANT_DEGREES_FAHRENHEIT

    const CONSTANT_DEGREES_FAHRENHEIT = 255.37222222222428





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




### kelvin

    \Measurements\Units\UnitTemperature Measurements\Units\UnitTemperature::kelvin()

Returns the kelvin unit of temperature.



* Visibility: **public**
* This method is **static**.




### celsius

    \Measurements\Units\UnitTemperature Measurements\Units\UnitTemperature::celsius()

Returns the degree Celsius unit of temperature.



* Visibility: **public**
* This method is **static**.




### fahrenheit

    \Measurements\Units\UnitTemperature Measurements\Units\UnitTemperature::fahrenheit()

Returns the degree Fahrenheit unit of temperature.



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



