Measurements\Units\UnitMass
===============

The `UnitMass` class encapsulates units of measure for mass.

You typically use instances of `UnitMass` to represent specific quantities of mass using the `Measurement` class.

Mass is a fundamental property of matter that causes it to resist being accelerated by a force.
The SI unit for mass is the kilogram (kg), which defined in terms of the mass of the international prototype kilogram.

The base unit of `UnitMass` is defined as kilograms.


* Class name: UnitMass
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_KILOGRAMS

    const SYMBOL_KILOGRAMS = "kg"





### SYMBOL_GRAMS

    const SYMBOL_GRAMS = "g"





### SYMBOL_DECIGRAMS

    const SYMBOL_DECIGRAMS = "dg"





### SYMBOL_CENTIGRAMS

    const SYMBOL_CENTIGRAMS = "cg"





### SYMBOL_MILLIGRAMS

    const SYMBOL_MILLIGRAMS = "mg"





### SYMBOL_MICROGRAMS

    const SYMBOL_MICROGRAMS = "µg"





### SYMBOL_NANOGRAMS

    const SYMBOL_NANOGRAMS = "ng"





### SYMBOL_PICOGRAMS

    const SYMBOL_PICOGRAMS = "pg"





### SYMBOL_OUNCES

    const SYMBOL_OUNCES = "oz"





### SYMBOL_OUNCES_TROY

    const SYMBOL_OUNCES_TROY = "oz t"





### SYMBOL_POUNDS

    const SYMBOL_POUNDS = "lb"





### SYMBOL_STONES

    const SYMBOL_STONES = "st"





### SYMBOL_METRIC_TONS

    const SYMBOL_METRIC_TONS = "t"





### SYMBOL_SHORT_TONS

    const SYMBOL_SHORT_TONS = "ton"





### SYMBOL_CARATS

    const SYMBOL_CARATS = "ct"





### SYMBOL_SLUGS

    const SYMBOL_SLUGS = "sg"





### COEFFICIENT_KILOGRAMS

    const COEFFICIENT_KILOGRAMS = 1.0





### COEFFICIENT_GRAMS

    const COEFFICIENT_GRAMS = 0.001





### COEFFICIENT_DECIGRAMS

    const COEFFICIENT_DECIGRAMS = 0.0001





### COEFFICIENT_CENTIGRAMS

    const COEFFICIENT_CENTIGRAMS = 1.0E-5





### COEFFICIENT_MILLIGRAMS

    const COEFFICIENT_MILLIGRAMS = 1.0E-6





### COEFFICIENT_MICROGRAMS

    const COEFFICIENT_MICROGRAMS = 1.0E-9





### COEFFICIENT_NANOGRAMS

    const COEFFICIENT_NANOGRAMS = 1.0E-12





### COEFFICIENT_PICOGRAMS

    const COEFFICIENT_PICOGRAMS = 1.0E-15





### COEFFICIENT_OUNCES

    const COEFFICIENT_OUNCES = 0.0283495





### COEFFICIENT_OUNCES_TROY

    const COEFFICIENT_OUNCES_TROY = 0.03110348





### COEFFICIENT_POUNDS

    const COEFFICIENT_POUNDS = 0.453592





### COEFFICIENT_STONES

    const COEFFICIENT_STONES = 0.157473





### COEFFICIENT_METRIC_TONS

    const COEFFICIENT_METRIC_TONS = 1000.0





### COEFFICIENT_SHORT_TONS

    const COEFFICIENT_SHORT_TONS = 907.1849999999999





### COEFFICIENT_CARATS

    const COEFFICIENT_CARATS = 0.0002





### COEFFICIENT_SLUGS

    const COEFFICIENT_SLUGS = 14.5939





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




### kilograms

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::kilograms()

Returns the kilograms unit of mass.



* Visibility: **public**
* This method is **static**.




### grams

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::grams()

Returns the grams unit of mass.



* Visibility: **public**
* This method is **static**.




### decigrams

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::decigrams()

Returns the decigrams unit of mass.



* Visibility: **public**
* This method is **static**.




### centigrams

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::centigrams()

Returns the centigrams unit of mass.



* Visibility: **public**
* This method is **static**.




### milligrams

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::milligrams()

Returns the milligrams unit of mass.



* Visibility: **public**
* This method is **static**.




### micrograms

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::micrograms()

Returns the micrograms unit of mass.



* Visibility: **public**
* This method is **static**.




### nanograms

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::nanograms()

Returns the nanograms unit of mass.



* Visibility: **public**
* This method is **static**.




### picograms

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::picograms()

Returns the picograms unit of mass.



* Visibility: **public**
* This method is **static**.




### ounces

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::ounces()

Returns the ounces unit of mass.



* Visibility: **public**
* This method is **static**.




### ouncesTroy

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::ouncesTroy()

Returns the ounces Troy unit of mass.



* Visibility: **public**
* This method is **static**.




### pounds

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::pounds()

Returns the pounds unit of mass.



* Visibility: **public**
* This method is **static**.




### stones

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::stones()

Returns the stones unit of mass.



* Visibility: **public**
* This method is **static**.




### metricTons

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::metricTons()

Returns the metricTons unit of mass.



* Visibility: **public**
* This method is **static**.




### shortTons

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::shortTons()

Returns the short tons unit of mass.



* Visibility: **public**
* This method is **static**.




### carats

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::carats()

Returns the carats unit of mass.



* Visibility: **public**
* This method is **static**.




### slugs

    \Measurements\Units\UnitMass Measurements\Units\UnitMass::slugs()

Returns the slugs unit of mass.



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



