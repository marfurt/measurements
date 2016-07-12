Measurements\Units\UnitLength
===============

The `UnitLength` class encapsulates units of measure for length.

You typically use instances of `UnitLength` to represent specific quantities of length using the `Measurement` class.

Length is the dimensional extent of matter.
The SI unit for length is the meter (m), which is defined in terms of the distance traveled by light in a vacuum.

The base unit of `UnitLength` is defined as meters.


* Class name: UnitLength
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_MEGAMETERS

    const SYMBOL_MEGAMETERS = "Mm"





### SYMBOL_KILOMETERS

    const SYMBOL_KILOMETERS = "km"





### SYMBOL_HECTOMETERS

    const SYMBOL_HECTOMETERS = "hm"





### SYMBOL_DECAMETERS

    const SYMBOL_DECAMETERS = "dam"





### SYMBOL_METERS

    const SYMBOL_METERS = "m"





### SYMBOL_DECIMETERS

    const SYMBOL_DECIMETERS = "dm"





### SYMBOL_CENTIMETERS

    const SYMBOL_CENTIMETERS = "cm"





### SYMBOL_MILLIMETERS

    const SYMBOL_MILLIMETERS = "mm"





### SYMBOL_MICROMETERS

    const SYMBOL_MICROMETERS = "µm"





### SYMBOL_NANOMETERS

    const SYMBOL_NANOMETERS = "nm"





### SYMBOL_PICOMETERS

    const SYMBOL_PICOMETERS = "pm"





### SYMBOL_INCHES

    const SYMBOL_INCHES = "in"





### SYMBOL_FEET

    const SYMBOL_FEET = "ft"





### SYMBOL_YARDS

    const SYMBOL_YARDS = "yd"





### SYMBOL_MILES

    const SYMBOL_MILES = "mi"





### SYMBOL_LIGHTYEARS

    const SYMBOL_LIGHTYEARS = "ly"





### SYMBOL_NAUTICAL_MILES

    const SYMBOL_NAUTICAL_MILES = "NM"





### SYMBOL_FATHOMS

    const SYMBOL_FATHOMS = "ftm"





### SYMBOL_FURLONGS

    const SYMBOL_FURLONGS = "fur"





### SYMBOL_ASTRONOMIC_UNITS

    const SYMBOL_ASTRONOMIC_UNITS = "ua"





### SYMBOL_PARSECS

    const SYMBOL_PARSECS = "pc"





### COEFFICIENT_MEGAMETERS

    const COEFFICIENT_MEGAMETERS = 1000000.0





### COEFFICIENT_KILOMETERS

    const COEFFICIENT_KILOMETERS = 1000.0





### COEFFICIENT_HECTOMETERS

    const COEFFICIENT_HECTOMETERS = 100.0





### COEFFICIENT_DECAMETERS

    const COEFFICIENT_DECAMETERS = 10.0





### COEFFICIENT_METERS

    const COEFFICIENT_METERS = 1.0





### COEFFICIENT_DECIMETERS

    const COEFFICIENT_DECIMETERS = 0.1





### COEFFICIENT_CENTIMETERS

    const COEFFICIENT_CENTIMETERS = 0.01





### COEFFICIENT_MILLIMETERS

    const COEFFICIENT_MILLIMETERS = 0.001





### COEFFICIENT_MICROMETERS

    const COEFFICIENT_MICROMETERS = 1.0E-6





### COEFFICIENT_NANOMETERS

    const COEFFICIENT_NANOMETERS = 1.0E-9





### COEFFICIENT_PICOMETERS

    const COEFFICIENT_PICOMETERS = 1.0E-12





### COEFFICIENT_INCHES

    const COEFFICIENT_INCHES = 0.0254





### COEFFICIENT_FEET

    const COEFFICIENT_FEET = 0.3048





### COEFFICIENT_YARDS

    const COEFFICIENT_YARDS = 0.9144





### COEFFICIENT_MILES

    const COEFFICIENT_MILES = 1609.34





### COEFFICIENT_LIGHTYEARS

    const COEFFICIENT_LIGHTYEARS = 9461000000000000.0





### COEFFICIENT_NAUTICAL_MILES

    const COEFFICIENT_NAUTICAL_MILES = 1852.0





### COEFFICIENT_FATHOMS

    const COEFFICIENT_FATHOMS = 1.8288





### COEFFICIENT_FURLONGS

    const COEFFICIENT_FURLONGS = 201.168





### COEFFICIENT_ASTRONOMIC_UNITS

    const COEFFICIENT_ASTRONOMIC_UNITS = 149600000000.0





### COEFFICIENT_PARSECS

    const COEFFICIENT_PARSECS = 3.086E+16





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




### megameters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::megameters()

Returns the megameters unit of length.



* Visibility: **public**
* This method is **static**.




### kilometers

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::kilometers()

Returns the kilometers unit of length.



* Visibility: **public**
* This method is **static**.




### hectometers

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::hectometers()

Returns the hectometers unit of length.



* Visibility: **public**
* This method is **static**.




### decameters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::decameters()

Returns the decameters unit of length.



* Visibility: **public**
* This method is **static**.




### meters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::meters()

Returns the meters unit of length.



* Visibility: **public**
* This method is **static**.




### decimeters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::decimeters()

Returns the decimeters unit of length.



* Visibility: **public**
* This method is **static**.




### centimeters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::centimeters()

Returns the centimeters unit of length.



* Visibility: **public**
* This method is **static**.




### millimeters

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::millimeters()

Returns the millimeters unit of length.



* Visibility: **public**
* This method is **static**.




### micrometers

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::micrometers()

Returns the micrometers unit of length.



* Visibility: **public**
* This method is **static**.




### nanometers

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::nanometers()

Returns the nanometers unit of length.



* Visibility: **public**
* This method is **static**.




### picometers

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::picometers()

Returns the picometers unit of length.



* Visibility: **public**
* This method is **static**.




### inches

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::inches()

Returns the inches unit of length.



* Visibility: **public**
* This method is **static**.




### feet

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::feet()

Returns the feet unit of length.



* Visibility: **public**
* This method is **static**.




### yards

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::yards()

Returns the yards unit of length.



* Visibility: **public**
* This method is **static**.




### miles

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::miles()

Returns the miles unit of length.



* Visibility: **public**
* This method is **static**.




### lightyears

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::lightyears()

Returns the lightyears unit of length.



* Visibility: **public**
* This method is **static**.




### nauticalMiles

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::nauticalMiles()

Returns the nautical miles unit of length.



* Visibility: **public**
* This method is **static**.




### fathoms

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::fathoms()

Returns the fathoms unit of length.



* Visibility: **public**
* This method is **static**.




### furlongs

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::furlongs()

Returns the furlongs unit of length.



* Visibility: **public**
* This method is **static**.




### astronomicalUnits

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::astronomicalUnits()

Returns the astronomical units unit of length.



* Visibility: **public**
* This method is **static**.




### parsecs

    \Measurements\Units\UnitLength Measurements\Units\UnitLength::parsecs()

Returns the parsecs unit of length.



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



