Measurements\Units\UnitPressure
===============

The `UnitPressure` class encapsulates units of measure for pressure.

You typically use instances of `UnitPressure` to represent specific quantities of pressure using the `Measurement` class.

Pressure is the normal force over a surface.
The SI unit for pressure is the pascal (Pa), which is derived as one newton of force over one square meter (1Pa = 1N / 1m2).

The base unit of `UnitPressure` is defined as newtons per meter squared (equivalent to Pascals).


* Class name: UnitPressure
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_NEWTONS_PER_METERS_SQUARED

    const SYMBOL_NEWTONS_PER_METERS_SQUARED = "N/m²"





### SYMBOL_GIGAPASCALS

    const SYMBOL_GIGAPASCALS = "GPa"





### SYMBOL_MEGAPASCALS

    const SYMBOL_MEGAPASCALS = "MPa"





### SYMBOL_KILOPASCALS

    const SYMBOL_KILOPASCALS = "kPa"





### SYMBOL_HECTOPASCALS

    const SYMBOL_HECTOPASCALS = "hPa"





### SYMBOL_PASCALS

    const SYMBOL_PASCALS = "Pa"





### SYMBOL_INCHES_OF_MERCURY

    const SYMBOL_INCHES_OF_MERCURY = "inHg"





### SYMBOL_BARS

    const SYMBOL_BARS = "bar"





### SYMBOL_MILLIBARS

    const SYMBOL_MILLIBARS = "mbar"





### SYMBOL_MILLIMETERS_OF_MERCURY

    const SYMBOL_MILLIMETERS_OF_MERCURY = "mmHg"





### SYMBOL_POUNDS_PER_SQUARE_INCH

    const SYMBOL_POUNDS_PER_SQUARE_INCH = "psi"





### COEFFICIENT_NEWTONS_PER_METERS_SQUARED

    const COEFFICIENT_NEWTONS_PER_METERS_SQUARED = 1.0





### COEFFICIENT_GIGAPASCALS

    const COEFFICIENT_GIGAPASCALS = 1000000000.0





### COEFFICIENT_MEGAPASCALS

    const COEFFICIENT_MEGAPASCALS = 1000000.0





### COEFFICIENT_KILOPASCALS

    const COEFFICIENT_KILOPASCALS = 1000.0





### COEFFICIENT_HECTOPASCALS

    const COEFFICIENT_HECTOPASCALS = 100.0





### COEFFICIENT_PASCALS

    const COEFFICIENT_PASCALS = 1.0





### COEFFICIENT_INCHES_OF_MERCURY

    const COEFFICIENT_INCHES_OF_MERCURY = 3386.39





### COEFFICIENT_BARS

    const COEFFICIENT_BARS = 100000.0





### COEFFICIENT_MILLIBARS

    const COEFFICIENT_MILLIBARS = 100.0





### COEFFICIENT_MILLIMETERS_OF_MERCURY

    const COEFFICIENT_MILLIMETERS_OF_MERCURY = 133.322





### COEFFICIENT_POUNDS_PER_SQUARE_INCH

    const COEFFICIENT_POUNDS_PER_SQUARE_INCH = 6894.76





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




### newtonsPerMeterSquared

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::newtonsPerMeterSquared()

Returns the newtons per meter square unit of pressure (equivalent to Pascals).



* Visibility: **public**
* This method is **static**.




### gigapascals

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::gigapascals()

Returns the pascals unit of pressure (equivalent to newtons per meter square).



* Visibility: **public**
* This method is **static**.




### megapascals

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::megapascals()

Returns the megapascals unit of pressure (equivalent to newtons per meter square).



* Visibility: **public**
* This method is **static**.




### kilopascals

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::kilopascals()

Returns the kilopascals unit of pressure.



* Visibility: **public**
* This method is **static**.




### hectopascals

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::hectopascals()

Returns the hectopascals unit of pressure.



* Visibility: **public**
* This method is **static**.




### pascals

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::pascals()

Returns the Pascals unit of pressure (equivalent to newtons per meter square).



* Visibility: **public**
* This method is **static**.




### inchesOfMercury

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::inchesOfMercury()

Returns the inches of mercury unit of pressure.



* Visibility: **public**
* This method is **static**.




### bars

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::bars()

Returns the bars unit of pressure.



* Visibility: **public**
* This method is **static**.




### millibars

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::millibars()

Returns the millibars unit of pressure.



* Visibility: **public**
* This method is **static**.




### millimetersOfMercury

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::millimetersOfMercury()

Returns the millimeters of mercury unit of pressure.



* Visibility: **public**
* This method is **static**.




### poundsPerSquareInch

    \Measurements\Units\UnitPressure Measurements\Units\UnitPressure::poundsPerSquareInch()

Returns the pounds per square inch unit of pressure.



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



