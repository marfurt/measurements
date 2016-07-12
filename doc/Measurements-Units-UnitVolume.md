Measurements\Units\UnitVolume
===============

The `UnitVolume` class encapsulates units of measure for volume.

You typically use instances of `UnitVolume` to represent specific quantities of volume using the `Measurement` class.
Volume is a quantity of the extend of matter in three dimensions.
The SI accepted unit of volume is the liter (L), which is derived as one cubic decimeter (1 dm3).
Volume is also commonly expressed in terms of cubic meters (m3), gallons (gal), and cups (cup).
The base unit of `UnitVolume` is defined as liters.


* Class name: UnitVolume
* Namespace: Measurements\Units
* Parent class: [Measurements\Dimension](Measurements-Dimension.md)



Constants
----------


### SYMBOL_MEGALITERS

    const SYMBOL_MEGALITERS = "ML"





### SYMBOL_KILOLITERS

    const SYMBOL_KILOLITERS = "kL"





### SYMBOL_LITERS

    const SYMBOL_LITERS = "L"





### SYMBOL_DECILITERS

    const SYMBOL_DECILITERS = "dL"





### SYMBOL_CENTILITERS

    const SYMBOL_CENTILITERS = "cL"





### SYMBOL_MILLILITERS

    const SYMBOL_MILLILITERS = "mL"





### SYMBOL_CUBIC_KILOMETERS

    const SYMBOL_CUBIC_KILOMETERS = "km³"





### SYMBOL_CUBIC_METERS

    const SYMBOL_CUBIC_METERS = "m³"





### SYMBOL_CUBIC_DECIMETERS

    const SYMBOL_CUBIC_DECIMETERS = "dm³"





### SYMBOL_CUBIC_CENTIMETERS

    const SYMBOL_CUBIC_CENTIMETERS = "cm³"





### SYMBOL_CUBIC_MILLIMETERS

    const SYMBOL_CUBIC_MILLIMETERS = "mm³"





### SYMBOL_CUBIC_INCHES

    const SYMBOL_CUBIC_INCHES = "in³"





### SYMBOL_CUBIC_FEET

    const SYMBOL_CUBIC_FEET = "ft³"





### SYMBOL_CUBIC_YARDS

    const SYMBOL_CUBIC_YARDS = "yd³"





### SYMBOL_CUBIC_MILES

    const SYMBOL_CUBIC_MILES = "mi³"





### SYMBOL_ACRE_FEET

    const SYMBOL_ACRE_FEET = "af"





### SYMBOL_BUSHELS

    const SYMBOL_BUSHELS = "bsh"





### SYMBOL_TEASPOONS

    const SYMBOL_TEASPOONS = "tsp"





### SYMBOL_TABLESPOONS

    const SYMBOL_TABLESPOONS = "tbsp"





### SYMBOL_FLUID_OUNCES

    const SYMBOL_FLUID_OUNCES = "fl oz"





### SYMBOL_CUPS

    const SYMBOL_CUPS = "cup"





### SYMBOL_PINTS

    const SYMBOL_PINTS = "pt"





### SYMBOL_QUARTS

    const SYMBOL_QUARTS = "qt"





### SYMBOL_GALLONS

    const SYMBOL_GALLONS = "gal"





### SYMBOL_IMPERIAL_TEASPOONS

    const SYMBOL_IMPERIAL_TEASPOONS = "tsp Imperial"





### SYMBOL_IMPERIAL_TABLESPOONS

    const SYMBOL_IMPERIAL_TABLESPOONS = "tbsp Imperial"





### SYMBOL_IMPERIAL_FLUID_OUNCES

    const SYMBOL_IMPERIAL_FLUID_OUNCES = "fl oz Imperial"





### SYMBOL_IMPERIAL_PINTS

    const SYMBOL_IMPERIAL_PINTS = "pt Imperial"





### SYMBOL_IMPERIAL_QUARTS

    const SYMBOL_IMPERIAL_QUARTS = "qt Imperial"





### SYMBOL_IMPERIAL_GALLONS

    const SYMBOL_IMPERIAL_GALLONS = "gal Imperial"





### SYMBOL_METRIC_CUPS

    const SYMBOL_METRIC_CUPS = "metric cup Imperial"





### COEFFICIENT_MEGALITERS

    const COEFFICIENT_MEGALITERS = 1000000.0





### COEFFICIENT_KILOLITERS

    const COEFFICIENT_KILOLITERS = 1000.0





### COEFFICIENT_LITERS

    const COEFFICIENT_LITERS = 1.0





### COEFFICIENT_DECILITERS

    const COEFFICIENT_DECILITERS = 0.1





### COEFFICIENT_CENTILITERS

    const COEFFICIENT_CENTILITERS = 0.01





### COEFFICIENT_MILLILITERS

    const COEFFICIENT_MILLILITERS = 0.001





### COEFFICIENT_CUBIC_KILOMETERS

    const COEFFICIENT_CUBIC_KILOMETERS = 1000000000000.0





### COEFFICIENT_CUBIC_METERS

    const COEFFICIENT_CUBIC_METERS = 1000.0





### COEFFICIENT_CUBIC_DECIMETERS

    const COEFFICIENT_CUBIC_DECIMETERS = 1.0





### COEFFICIENT_CUBIC_CENTIMETERS

    const COEFFICIENT_CUBIC_CENTIMETERS = 0.01





### COEFFICIENT_CUBIC_MILLIMETERS

    const COEFFICIENT_CUBIC_MILLIMETERS = 0.001





### COEFFICIENT_CUBIC_INCHES

    const COEFFICIENT_CUBIC_INCHES = 0.0163871





### COEFFICIENT_CUBIC_FEET

    const COEFFICIENT_CUBIC_FEET = 28.3168





### COEFFICIENT_CUBIC_YARDS

    const COEFFICIENT_CUBIC_YARDS = 764.5549999999999





### COEFFICIENT_CUBIC_MILES

    const COEFFICIENT_CUBIC_MILES = 4168000000000.0





### COEFFICIENT_ACRE_FEET

    const COEFFICIENT_ACRE_FEET = 1233000.0





### COEFFICIENT_BUSHELS

    const COEFFICIENT_BUSHELS = 35.2391





### COEFFICIENT_TEASPOONS

    const COEFFICIENT_TEASPOONS = 0.00492892





### COEFFICIENT_TABLESPOONS

    const COEFFICIENT_TABLESPOONS = 0.0147868





### COEFFICIENT_FLUID_OUNCES

    const COEFFICIENT_FLUID_OUNCES = 0.0295735





### COEFFICIENT_CUPS

    const COEFFICIENT_CUPS = 0.24





### COEFFICIENT_PINTS

    const COEFFICIENT_PINTS = 0.473176





### COEFFICIENT_QUARTS

    const COEFFICIENT_QUARTS = 0.946353





### COEFFICIENT_GALLONS

    const COEFFICIENT_GALLONS = 3.78541





### COEFFICIENT_IMPERIAL_TEASPOONS

    const COEFFICIENT_IMPERIAL_TEASPOONS = 0.00591939





### COEFFICIENT_IMPERIAL_TABLESPOONS

    const COEFFICIENT_IMPERIAL_TABLESPOONS = 0.0177582





### COEFFICIENT_IMPERIAL_FLUID_OUNCES

    const COEFFICIENT_IMPERIAL_FLUID_OUNCES = 0.0284131





### COEFFICIENT_IMPERIAL_PINTS

    const COEFFICIENT_IMPERIAL_PINTS = 0.568261





### COEFFICIENT_IMPERIAL_QUARTS

    const COEFFICIENT_IMPERIAL_QUARTS = 1.13652





### COEFFICIENT_IMPERIAL_GALLONS

    const COEFFICIENT_IMPERIAL_GALLONS = 4.54609





### COEFFICIENT_METRIC_CUPS

    const COEFFICIENT_METRIC_CUPS = 0.25





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




### megaliters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::megaliters()

Returns the megaliters unit of volume.



* Visibility: **public**
* This method is **static**.




### kiloliters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::kiloliters()

Returns the kiloliters unit of volume.



* Visibility: **public**
* This method is **static**.




### liters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::liters()

Returns the liters unit of volume.



* Visibility: **public**
* This method is **static**.




### deciliters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::deciliters()

Returns the deciliters unit of volume.



* Visibility: **public**
* This method is **static**.




### centiliters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::centiliters()

Returns the centiliters unit of volume.



* Visibility: **public**
* This method is **static**.




### milliliters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::milliliters()

Returns the milliliters unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicKilometers

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicKilometers()

Returns the cubic kilometers unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicMeters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicMeters()

Returns the cubic meters unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicDecimeters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicDecimeters()

Returns the cubic decimeters unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicMillimeters

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicMillimeters()

Returns the cubic millimeters unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicInches

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicInches()

Returns the cubic inches unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicFeet

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicFeet()

Returns the cubic feet unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicYards

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicYards()

Returns the cubic yards unit of volume.



* Visibility: **public**
* This method is **static**.




### cubicMiles

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cubicMiles()

Returns the cubic miles unit of volume.



* Visibility: **public**
* This method is **static**.




### acreFeet

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::acreFeet()

Returns the acre feet unit of volume.



* Visibility: **public**
* This method is **static**.




### bushels

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::bushels()

Returns the bushels unit of volume.



* Visibility: **public**
* This method is **static**.




### teaspoons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::teaspoons()

Returns the tea spoons unit of volume.



* Visibility: **public**
* This method is **static**.




### tablespoons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::tablespoons()

Returns the table spoons unit of volume.



* Visibility: **public**
* This method is **static**.




### fluidOunces

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::fluidOunces()

Returns the fluid ounces unit of volume.



* Visibility: **public**
* This method is **static**.




### cups

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::cups()

Returns the cups of volume.



* Visibility: **public**
* This method is **static**.




### pints

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::pints()

Returns the pints unit of volume.



* Visibility: **public**
* This method is **static**.




### quarts

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::quarts()

Returns the quarts unit of volume.



* Visibility: **public**
* This method is **static**.




### gallons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::gallons()

Returns the gallons unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialTeaspoons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialTeaspoons()

Returns the imperial tea spoons unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialTablespoons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialTablespoons()

Returns the imperial table spoons unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialFluidOunces

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialFluidOunces()

Returns the imperial fluid ounces unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialPints

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialPints()

Returns the imperial pints unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialQuarts

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialQuarts()

Returns the imperial quarts unit of volume.



* Visibility: **public**
* This method is **static**.




### imperialGallons

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::imperialGallons()

Returns the imperial gallons unit of volume.



* Visibility: **public**
* This method is **static**.




### metricCups

    \Measurements\Units\UnitVolume Measurements\Units\UnitVolume::metricCups()

Returns the metric cups unit of volume.



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



