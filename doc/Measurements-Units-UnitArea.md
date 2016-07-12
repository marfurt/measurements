Measurements\Units\UnitArea
===============

The `UnitArea` class encapsulates units of measure for area.

You typically use instances of `UnitArea` to represent specific quantities of area using the `Measurement` class.

Area is a quantity of extent in two dimensions. Area can be expressed by SI derived units in terms of square meters (m2).
Area is also commonly measured in square feet (ft2) and acres (ac).

The base unit of `UnitArea` is defined as square meters.


* Class name: UnitArea
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_SQUARE_MEGAMETERS

    const SYMBOL_SQUARE_MEGAMETERS = "Mm²"





### SYMBOL_SQUARE_KILOMETERS

    const SYMBOL_SQUARE_KILOMETERS = "km²"





### SYMBOL_SQUARE_METERS

    const SYMBOL_SQUARE_METERS = "m²"





### SYMBOL_SQUARE_CENTIMETERS

    const SYMBOL_SQUARE_CENTIMETERS = "cm²"





### SYMBOL_SQUARE_MILLIMETERS

    const SYMBOL_SQUARE_MILLIMETERS = "mm²"





### SYMBOL_SQUARE_MICROMETERS

    const SYMBOL_SQUARE_MICROMETERS = "µm²"





### SYMBOL_SQUARE_NANOMETERS

    const SYMBOL_SQUARE_NANOMETERS = "nm²"





### SYMBOL_SQUARE_INCHES

    const SYMBOL_SQUARE_INCHES = "in²"





### SYMBOL_SQUARE_FEET

    const SYMBOL_SQUARE_FEET = "ft²"





### SYMBOL_SQUARE_YARDS

    const SYMBOL_SQUARE_YARDS = "yd²"





### SYMBOL_SQUARE_MILES

    const SYMBOL_SQUARE_MILES = "mi²"





### SYMBOL_SQUARE_ACRES

    const SYMBOL_SQUARE_ACRES = "ac"





### SYMBOL_SQUARE_ARES

    const SYMBOL_SQUARE_ARES = "a"





### SYMBOL_SQUARE_HECTARES

    const SYMBOL_SQUARE_HECTARES = "ha"





### COEFFICIENT_SQUARE_MEGAMETERS

    const COEFFICIENT_SQUARE_MEGAMETERS = 1000000000000.0





### COEFFICIENT_SQUARE_KILOMETERS

    const COEFFICIENT_SQUARE_KILOMETERS = 1000000.0





### COEFFICIENT_SQUARE_METERS

    const COEFFICIENT_SQUARE_METERS = 1.0





### COEFFICIENT_SQUARE_CENTIMETERS

    const COEFFICIENT_SQUARE_CENTIMETERS = 0.0001





### COEFFICIENT_SQUARE_MILLIMETERS

    const COEFFICIENT_SQUARE_MILLIMETERS = 1.0E-6





### COEFFICIENT_SQUARE_MICROMETERS

    const COEFFICIENT_SQUARE_MICROMETERS = 1.0E-12





### COEFFICIENT_SQUARE_NANOMETERS

    const COEFFICIENT_SQUARE_NANOMETERS = 1.0E-18





### COEFFICIENT_SQUARE_INCHES

    const COEFFICIENT_SQUARE_INCHES = 0.00064516





### COEFFICIENT_SQUARE_FEET

    const COEFFICIENT_SQUARE_FEET = 0.092903





### COEFFICIENT_SQUARE_YARDS

    const COEFFICIENT_SQUARE_YARDS = 0.836127





### COEFFICIENT_SQUARE_MILES

    const COEFFICIENT_SQUARE_MILES = 2590000.0





### COEFFICIENT_SQUARE_ACRES

    const COEFFICIENT_SQUARE_ACRES = 4046.86





### COEFFICIENT_SQUARE_ARES

    const COEFFICIENT_SQUARE_ARES = 100.0





### COEFFICIENT_SQUARE_HECTARES

    const COEFFICIENT_SQUARE_HECTARES = 10000.0





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




### squareMegameters

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareMegameters()

Returns the square megameters unit of area.



* Visibility: **public**
* This method is **static**.




### squareKilometers

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareKilometers()

Returns the square kilometers unit of area.



* Visibility: **public**
* This method is **static**.




### squareMeters

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareMeters()

Returns the square meters unit of area.



* Visibility: **public**
* This method is **static**.




### squareCentimeters

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareCentimeters()

Returns the square centimeters unit of area.



* Visibility: **public**
* This method is **static**.




### squareMillimeters

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareMillimeters()

Returns the square millimeters unit of area.



* Visibility: **public**
* This method is **static**.




### squareMicrometers

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareMicrometers()

Returns the square micrometers unit of area.



* Visibility: **public**
* This method is **static**.




### squareNanometers

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareNanometers()

Returns the square nanometers unit of area.



* Visibility: **public**
* This method is **static**.




### squareInches

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareInches()

Returns the square inches unit of area.



* Visibility: **public**
* This method is **static**.




### squareFeet

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareFeet()

Returns the square feet unit of area.



* Visibility: **public**
* This method is **static**.




### squareYards

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareYards()

Returns the square yards unit of area.



* Visibility: **public**
* This method is **static**.




### squareMiles

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::squareMiles()

Returns the square miles unit of area.



* Visibility: **public**
* This method is **static**.




### acres

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::acres()

Returns the acres unit of area.



* Visibility: **public**
* This method is **static**.




### ares

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::ares()

Returns the ares unit of area.



* Visibility: **public**
* This method is **static**.




### hectares

    \Measurements\Units\UnitArea Measurements\Units\UnitArea::hectares()

Returns the hectares unit of area.



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



