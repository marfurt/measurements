# Measurements & Units

![Build Status](https://github.com/marfurt/measurements/actions/workflows/tests.yml/badge.svg?branch=master)
[![Latest Stable Version](https://poser.pugx.org/nmarfurt/measurements/v/stable)](https://packagist.org/packages/nmarfurt/measurements)
[![License](https://poser.pugx.org/nmarfurt/measurements/license)](https://packagist.org/packages/nmarfurt/measurements)


## About

This is a PHP library for representing and converting dimensional units of measure.
This is inspired by the [Measurement API](https://developer.apple.com/reference/foundation/nsmeasurement) in the Apple Foundation Framework.


## Installation

The package can be installed via [Composer](https://getcomposer.org):

```shell
composer require nmarfurt/measurements
```


## Library Classes

### Unit

`Unit` is the abstract superclass of units. Each instance of an `Unit` subclass consists of a symbol, which can be used to create string representations of `Measurement` objects.

### Dimension

`Dimension` is an abstract subclass of `Unit` that represents unit families or a dimensional unit of measure, which can be converted into different units of the same type.
Each instance of an `Dimension`  subclass has a converter, which is used to represent the unit in terms of the dimension's base unit provided by the `baseUnit()` method.

> The library provides concrete subclasses for many of the most common types of physical units (listed below).
> If you need a custom unit type to represent a custom or derived unit, you can subclass `Dimension`. If you need to represent dimensionless units, subclass `Unit` directly.


### UnitConverter

A `UnitConverter` describes how to convert a unit to and from the base unit of its dimension. `UnitConverterLinear` is a `UnitConverter` subclass for converting between units using a linear equation. You can define your own converters if needed.

### Measurement

A `Measurement` object represents a measured quantity, using a unit of measure and a value. The `Measurement` class provides a programmatic interface to converting measurements into different units, as well as calculating the sum or difference between two measurements.

`Measurement` objects are initialized with a `Unit` object and double value. They are immutable and cannot be changed after being created.

> The library provides specific subclasses (so called Quantities) for measurements that correspond to the provided units (see the list below).
 

## Provided Units & Quantities

The library provides concrete subclasses for many of the most common types of physical units:

| Dimension Subclass | Description | Base Unit | Measurement Subclass |
| ------------------ | ----------- | --------- | -------------------- |
| UnitAcceleration |  Unit of measure for acceleration | meters per second squared `m/s²` | Acceleration
| UnitAngle | Unit of measure for planar angle and rotation | degrees `°` | Angle
| UnitArea | Unit of measure for area | square meters `m²` | Area
| UnitConcentrationMass | Unit of measure for concentration of mass | milligrams per deciliter `mg/dL` | ConcentrationMass
| UnitDispersion | Unit of measure for dispersion | parts per million `ppm` | Dispersion
| UnitDuration | Unit of measure for duration | seconds `sec` | Duration
| UnitElectricCharge | Unit of measure for electric charge | coulombs `C` | ElectricCharge
| UnitElectricCurrent | Unit of measure for electric current | amperes `A` | ElectricCurrent
| UnitElectricPotentialDifference | Unit of measure for electric potential difference | volts `V` | ElectricPotentialDifference
| UnitElectricResistance | Unit of measure for electric resistance | ohms `Ω` | ElectricResistance
| UnitEnergy | Unit of measure for energy | joules `J` | Energy
| UnitFrequency | Unit of measure for frequency | hertz `Hz` | Frequency
| UnitFuelEfficiency | Unit of measure for fuel consumption | liters per 100 kilometers `L/100km` | FuelEfficiency
| UnitIlluminance | Unit of measure for illuminance | lux `lx` | Illuminance
| UnitLength | Unit of measure for length | meters `m` | Length
| UnitMass | Unit of measure for mass | kilograms `kg` | Mass
| UnitPower | Unit of measure for power | watts `W`| Power
| UnitPressure | Unit of measure for pressure | newtons per square meter `N/m²`| Pressure
| UnitRadioactivity | Unit of measure for radioactivity | becquerel `Bq`| Radioactivity
| UnitSpeed | Unit of measure for speed | meters per second `m/s`| Speed
| UnitTemperature | Unit of measure for temperature | kelvin `K`| Temperature
| UnitVolume | Unit of measure for volume | liters `L`| Volume


## Usage

### Using Measurements

You can define measurements as follows:

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;

$length = new Measurement(4.48, UnitLength::meters());
echo $length; // = 4.48 m

$duration = new Measurement(1.5, UnitDuration::hours());
echo $duration; // = 1.5 hr
```

You may want to enforce the unit type of a measurement by using the provided measurement subclasses (_aka_ _Quantities_):

``` php
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Quantities\Length;
use Measurements\Quantities\Duration;

$length = new Length(4.48, UnitLength::meters());
echo $length; // = 4.48 m

$duration = new Duration(1.5, UnitDuration::hours());
echo $duration; // = 1.5 hr

$invalid = new Length(4.48, UnitDuration::hours()); // Will throw a UnitException exception
```

The _Quantities_ objects also provide the benefit of an expressive syntax to create measurements. They make use of the `__callStatic()` magic-method to create a new instance by resolving the derived dimension.

``` php
use Measurements\Quantities\Length;
use Measurements\Quantities\Duration;

$length = Length::meters(4.48);
echo $length; // = 4.48 m

$duration = Duration::hours(1.5);
echo $duration; // = 1.5 hr

$invalid = Length::hours(4.48); // Will throw a BadMethodCallException exception
```

Some of the _Measurement_ subclasses expose convenience methods to easily create instances from other measurements.

``` php
use Measurements\Quantities\Length;
use Measurements\Quantities\Duration;

$distance = Length::kilometers(18);
$time = Duration::hours(1);

$speed = Speed::fromLengthAndDuration($distance, $time);
echo $speed->toString(); // 5 m/s

```


### Converting Measurements

_Measurement_ objects of the same dimension can be converted from one unit of measure to another.

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;

$meters = new Measurement(4.48, UnitLength::meters());

$centimeters = $meters->convertTo(UnitLength::centimeters());
echo $centimeters; // = 448 cm
```

Measurements created as _Quantities_ objects also provide a short syntax to convert them. They make use of the `__call()` magic-method to resolve the derived dimension.

``` php
use Measurements\Quantities\Length;

$meters = Length::meters(4.48);

$centimeters = $meters->toCentimeters();
echo $centimeters; // = 448 cm
```


### Making Arithmetic Operations

_Measurement_ objects support different operations, including `add` (`+`), `subtract` (`-`), `multiply` (`*`) and `divide` (`/`).
Since _Measurement_ objects are immutable, new instances are returned.

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;

$first = new Measurement(4.48, UnitLength::meters());
$second = new Measurement(2.02, UnitLength::meters());

echo $first->add($second); // = 6.5 m

echo $first->subtract($second); // = 2.46 m

echo $first->multiplyBy($second); // = 9.0496 m

echo $first->divideBy($second); // = 2.2178217822 m
```


Conversions are automatically applied while making operations on measurements with different units. The returned measurement is defined in the base unit. 

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;

$decimeters = new Measurement(44.8, UnitLength::decimeters());
$centimeters = new Measurement(202, UnitLength::centimeters());

echo $decimeters->add($centimeters); // = 6.5 m

echo $decimeters->subtract($centimeters); // = 2.46 m

echo $decimeters->multiplyBy($centimeters); // = 9.0496 m

echo $decimeters->divideBy($centimeters); // = 2.2178217822 m
```


It is also possible to make arithmetic operations on a measurement using values.

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;

$centimeters = new Measurement(42, UnitLength::centimeters());

echo $centimeters->addValue(8); // = 50 cm

echo $centimeters->subtractValue(12); // = 30 cm

echo $centimeters->multiplyByValue(2); // = 84 cm

echo $centimeters->divideByValue(2); // = 21 cm
```


### Working with Custom Units

In addition to provided units, you can define custom units. Custom units can be initialized from a symbol and converter of an existing type or implemented as a class method of an existing type for additional convenience. You can also define your own `Dimension` subclass to represent an entirely new unit dimension.

#### Initializing a Custom Unit with a Specified Symbol and Definition

The simplest way to define a custom unit is to create a new instance of an existing `Dimension` subclass.

For example, let define a _jump_ as a custom, nonstandard unit of length (1 jump = 1.82 m). You can create a new instance of `UnitLength` as follows:

``` php
$jump = new UnitLength("jump", new UnitConverterLinear(1.82));
```

#### Extending Existing Dimension Subclasses

Alternatively, you can extend an existing `Dimension` subclass to define a new unit.

For example, let define our new _jump_ unit as custom subclass:

``` php
class UnitJump extends UnitLength {

	public static function jumps()
	{
		return new static("jump", new UnitConverterLinear(1.82));
	}

}
```


#### Creating a Custom Dimension Subclass

You can create a new subclass of `Dimension` to describe a new unit dimension.

For example, let define units for digital data. In computing and telecommunications, a unit of information is the capacity of some standard data storage system or communication channel, used to measure the capacities of other systems and channels.
Bytes, or multiples thereof, are common units used to specify the sizes of computer files and the capacity of storage units.

You can implement a `UnitDigitalData` class that defines units of digital information as follows:

``` php
class UnitDigitalData extends Dimension {

	public static function baseUnit()
	{
		return static::bytes();
	}
	
	public static function bytes()
	{
		return new UnitDigitalData("B", new UnitConverterLinear(1.0));
	}

	public static function kilobytes()
	{
		return new UnitDigitalData("kB", new UnitConverterLinear(1000));
	}
	
	public static function megabytes()
	{
		return new UnitDigitalData("MB", new UnitConverterLinear(1000000));
	}

	public static function kibibytes()
	{
		return new UnitDigitalData("KiB", new UnitConverterLinear(1024));
	}

	public static function mebibytes()
	{
		return new UnitDigitalData("MiB", new UnitConverterLinear(1048576));
	}
	
	// ...

}
```


## Generating API Documentation

```shell
phpdoc -d ./src/ -t ./doc/generated --template="xml"
phpdocmd ./doc/generated/structure.xml doc/
```


## License

This library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
