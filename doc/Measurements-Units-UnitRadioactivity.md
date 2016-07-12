Measurements\Units\UnitRadioactivity
===============

The `UnitRadioactivity` class encapsulates units of measure for radioactivity.

You typically use instances of `UnitRadioactivity` to represent specific quantities of radioactivity using the `Measurement` class.

Radioactivity is the process by which the nucleus of an atom emits radiation.
The SI unit of measure for radioactivity is the becquerel (Bq), which is defined as the quantity of radioactive material in which one nucleus decays per second (1 Bq = 1 s-1).
Radioactivity is also commonly described in terms of curies (Ci), a unit defined relative to the decay of one gram of the radium-226 isotope (1 Ci = 3.7 × 1010 Bq).

The base unit of `UnitRadioactivity` is defined as becquerel.


* Class name: UnitRadioactivity
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_BECQUEREL

    const SYMBOL_BECQUEREL = "Bq"





### SYMBOL_CURIE

    const SYMBOL_CURIE = "Ci"





### COEFFICIENT_BECQUEREL

    const COEFFICIENT_BECQUEREL = 1.0





### COEFFICIENT_CURIE

    const COEFFICIENT_CURIE = 37000000000.0





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




### becquerel

    \Measurements\Units\UnitRadioactivity Measurements\Units\UnitRadioactivity::becquerel()

Returns the becquerel unit of radioactivity.



* Visibility: **public**
* This method is **static**.




### curie

    \Measurements\Units\UnitRadioactivity Measurements\Units\UnitRadioactivity::curie()

Returns the curie unit of radioactivity.



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



