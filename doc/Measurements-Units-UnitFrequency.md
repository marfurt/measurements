Measurements\Units\UnitFrequency
===============

The `UnitFrequency` class encapsulates units of measure for frequency.

You typically use instances of `UnitFrequency` to represent specific quantities of frequency using the `Measurement` class.

Frequency is a quantity of occurrences for a repeating event over time.
The SI unit for frequency is the hertz (Hz), which is a derived as one occurrence per second (1Hz = 1 / 1s).

The base unit of `UnitFrequency` is defined as hertz.


* Class name: UnitFrequency
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_TERAHERTZ

    const SYMBOL_TERAHERTZ = "THz"





### SYMBOL_GIGAHERTZ

    const SYMBOL_GIGAHERTZ = "GHz"





### SYMBOL_MEGAHERTZ

    const SYMBOL_MEGAHERTZ = "MHz"





### SYMBOL_KILOHERTZ

    const SYMBOL_KILOHERTZ = "kHz"





### SYMBOL_HERTZ

    const SYMBOL_HERTZ = "Hz"





### SYMBOL_MILLIHERTZ

    const SYMBOL_MILLIHERTZ = "mHz"





### SYMBOL_MICROHERTZ

    const SYMBOL_MICROHERTZ = "µHz"





### SYMBOL_NANOHERTZ

    const SYMBOL_NANOHERTZ = "nHz"





### COEFFICIENT_TERAHERTZ

    const COEFFICIENT_TERAHERTZ = 1000000000000.0





### COEFFICIENT_GIGAHERTZ

    const COEFFICIENT_GIGAHERTZ = 1000000000.0





### COEFFICIENT_MEGAHERTZ

    const COEFFICIENT_MEGAHERTZ = 1000000.0





### COEFFICIENT_KILOHERTZ

    const COEFFICIENT_KILOHERTZ = 1000.0





### COEFFICIENT_HERTZ

    const COEFFICIENT_HERTZ = 1.0





### COEFFICIENT_MILLIHERTZ

    const COEFFICIENT_MILLIHERTZ = 0.001





### COEFFICIENT_MICROHERTZ

    const COEFFICIENT_MICROHERTZ = 1.0E-6





### COEFFICIENT_NANOHERTZ

    const COEFFICIENT_NANOHERTZ = 1.0E-9





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




### terahertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::terahertz()

Returns the terahertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### gigahertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::gigahertz()

Returns the gigahertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### megahertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::megahertz()

Returns the megahertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### kilohertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::kilohertz()

Returns the kilohertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### hertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::hertz()

Returns the hertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### millihertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::millihertz()

Returns the millihertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### microhertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::microhertz()

Returns the microhertz unit of frequency.



* Visibility: **public**
* This method is **static**.




### nanohertz

    \Measurements\Units\UnitFrequency Measurements\Units\UnitFrequency::nanohertz()

Returns the nanohertz unit of frequency.



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



