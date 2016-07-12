Measurements\Converters\UnitConverterReciprocal
===============

`UnitConverterReciprocal` is a `UnitConverter` subclass for converting between units using a reciprocal function.




* Class name: UnitConverterReciprocal
* Namespace: Measurements\Converters
* This class implements: [Measurements\UnitConverter](Measurements-UnitConverter.md)




Properties
----------


### $reciprocal

    protected double $reciprocal

The reciprocal value used in the unit conversion calculation.



* Visibility: **protected**


Methods
-------


### __construct

    mixed Measurements\Converters\UnitConverterReciprocal::__construct(double $reciprocal)

Initializes the unit converter with the specified reciprocal value.



* Visibility: **public**


#### Arguments
* $reciprocal **double** - &lt;p&gt;The reciprocal value used in the unit conversion calculation.&lt;/p&gt;



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


