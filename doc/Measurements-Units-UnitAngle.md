Measurements\Units\UnitAngle
===============

The `UnitAngle` class encapsulates units of measure for rotation.

You typically use instances of `UnitAngle` to represent specific quantities of planar angle using the `Measurement` class.

Angle is a quantity of rotation. The SI unit for angle is the radian (rad), which is dimensionless and defined to be the the angle subtended by an arc that is equal in length to the radius of a circle.
Angle is also commonly expressed in terms of degrees (°) and revolutions (rev).

The base unit of `UnitAngle` is defined as degrees.


* Class name: UnitAngle
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_DEGREES

    const SYMBOL_DEGREES = "°"





### SYMBOL_ARC_MINUTES

    const SYMBOL_ARC_MINUTES = "ʹ"





### SYMBOL_ARC_SECONDS

    const SYMBOL_ARC_SECONDS = "″"





### SYMBOL_RADIANS

    const SYMBOL_RADIANS = "rad"





### SYMBOL_GRADIANS

    const SYMBOL_GRADIANS = "grad"





### SYMBOL_REVOLUTIONS

    const SYMBOL_REVOLUTIONS = "rev"





### COEFFICIENT_DEGREES

    const COEFFICIENT_DEGREES = 1.0





### COEFFICIENT_ARC_MINUTES

    const COEFFICIENT_ARC_MINUTES = 0.016667





### COEFFICIENT_ARC_SECONDS

    const COEFFICIENT_ARC_SECONDS = 0.00027778





### COEFFICIENT_RADIANS

    const COEFFICIENT_RADIANS = 57.2958





### COEFFICIENT_GRADIANS

    const COEFFICIENT_GRADIANS = 0.9





### COEFFICIENT_REVOLUTIONS

    const COEFFICIENT_REVOLUTIONS = 6.28319





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




### degrees

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::degrees()

Returns the degrees unit of rotation.



* Visibility: **public**
* This method is **static**.




### arcMinutes

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::arcMinutes()

Returns the arc minutes unit of rotation.



* Visibility: **public**
* This method is **static**.




### arcSeconds

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::arcSeconds()

Returns the arc seconds unit of rotation.



* Visibility: **public**
* This method is **static**.




### radians

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::radians()

Returns the radians unit of rotation.



* Visibility: **public**
* This method is **static**.




### gradians

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::gradians()

Returns the gradians unit of rotation.



* Visibility: **public**
* This method is **static**.




### revolutions

    \Measurements\Units\UnitAngle Measurements\Units\UnitAngle::revolutions()

Returns the revolutions unit of rotation.



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



