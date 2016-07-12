Measurements\Units\UnitConcentrationMass
===============

The `UnitConcentrationMass` class encapsulates units of measure for concentration of mass.

You typically use instances of `UnitConcentrationMass` to represent specific quantities of concentration using the `Measurement` class.

Concentration is the abundance of a constituent within a volume.
Concentration can be expressed by SI derived units in terms of kilograms per cubic meter (kg/m3).

The base unit of `UnitConcentrationMass` is defined as grams per liter.


* Class name: UnitConcentrationMass
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_GRAMS_PER_LITER

    const SYMBOL_GRAMS_PER_LITER = "g/L"





### SYMBOL_MILLIGRAMS_PER_DECILITER

    const SYMBOL_MILLIGRAMS_PER_DECILITER = "mg/dL"





### SYMBOL_MILLIMOLES_PER_LITER

    const SYMBOL_MILLIMOLES_PER_LITER = "mmol/L"





### COEFFICIENT_GRAMS_PER_LITER

    const COEFFICIENT_GRAMS_PER_LITER = 1.0





### COEFFICIENT_MILLIGRAMS_PER_DECILITER

    const COEFFICIENT_MILLIGRAMS_PER_DECILITER = 0.01





### COEFFICIENT_MILLIMOLES_PER_LITER

    const COEFFICIENT_MILLIMOLES_PER_LITER = 18.0





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




### gramsPerLiter

    \Measurements\Units\UnitConcentrationMass Measurements\Units\UnitConcentrationMass::gramsPerLiter()

Returns grams per liter unit of concentration.



* Visibility: **public**
* This method is **static**.




### milligramsPerDeciliter

    \Measurements\Units\UnitConcentrationMass Measurements\Units\UnitConcentrationMass::milligramsPerDeciliter()

Returns milligrams per deciliter unit of concentration.



* Visibility: **public**
* This method is **static**.




### millimolesPerLiterWithGramsPerMole

    \Measurements\Units\UnitConcentrationMass Measurements\Units\UnitConcentrationMass::millimolesPerLiterWithGramsPerMole(double $gramsPerMole)

Returns the millimoles per liter unit with the specified number of grams per mole.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $gramsPerMole **double** - &lt;p&gt;The mass, in grams, for a mole of a given constituent.&lt;/p&gt;



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



