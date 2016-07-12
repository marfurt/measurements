Measurements\Quantities\ConcentrationMass
===============

The `ConcentrationMass` class represents a specific quantities of concentration.




* Class name: ConcentrationMass
* Namespace: Measurements\Quantities
* Parent class: Measurements\Measurement







Methods
-------


### __construct

    mixed Measurements\Quantities\ConcentrationMass::__construct(double $value, \Measurements\Unit $unit)

Initializes a new concentration of mass measurement with a specified floating-point value and unit.



* Visibility: **public**


#### Arguments
* $value **double** - &lt;p&gt;The measurement value.&lt;/p&gt;
* $unit **[Measurements\Unit](Measurements-Unit.md)** - &lt;p&gt;The unit of measure.&lt;/p&gt;



### fromMassAndVolume

    \Measurements\Quantities\ConcentrationMass Measurements\Quantities\ConcentrationMass::fromMassAndVolume(\Measurements\Quantities\Mass $mass, \Measurements\Quantities\Volume $volume)

Returns a concentration of mass measurement computed from the specified mass and volume.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $mass **[Measurements\Quantities\Mass](Measurements-Quantities-Mass.md)** - &lt;p&gt;A mass.&lt;/p&gt;
* $volume **[Measurements\Quantities\Volume](Measurements-Quantities-Volume.md)** - &lt;p&gt;A volume.&lt;/p&gt;


