Measurements\Converters\UnitConverterLinear
===============

`UnitConverterLinear` is a `UnitConverter` subclass for converting between units using a linear equation.

A linear equation for unit conversion takes the form y = mx + b, such that:
- y is the value in terms of the base unit of the dimension
- m is the known coefficient used for this unit's conversion
- x is the value in terms of the unit on which this method is called
- b is the known constant used for this unit's conversion


* Class name: UnitConverterLinear
* Namespace: Measurements\Converters
* This class implements: [Measurements\UnitConverter](Measurements-UnitConverter.md)




Properties
----------


### $coefficient

    protected double $coefficient

The coefficient used in the linear unit conversion calculation.



* Visibility: **protected**


### $constant

    protected double $constant

The constant used in the linear unit conversion calculation.



* Visibility: **protected**


Methods
-------


### __construct

    mixed Measurements\Converters\UnitConverterLinear::__construct(double $coefficient, double $constant)

Initializes the unit converter with the specified coefficient and constant.



* Visibility: **public**


#### Arguments
* $coefficient **double** - &lt;p&gt;The coefficient used in the linear unit conversion calculation.&lt;/p&gt;
* $constant **double** - &lt;p&gt;The constant used in the linear unit conversion calculation.&lt;/p&gt;



### baseUnitValueFromValue

    mixed Measurements\UnitConverter::baseUnitValueFromValue($value)





* Visibility: **public**
* This method is defined by [Measurements\UnitConverter](Measurements-UnitConverter.md)


#### Arguments
* $value **mixed**



### valueFromBaseUnitValue

    mixed Measurements\UnitConverter::valueFromBaseUnitValue($baseUnitValue)





* Visibility: **public**
* This method is defined by [Measurements\UnitConverter](Measurements-UnitConverter.md)


#### Arguments
* $baseUnitValue **mixed**


