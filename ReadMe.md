# Measurements & Units

## About

This is a PHP library for representing and converting dimensional units of measure.
This is inspired by the [Measurement API](https://developer.apple.com/reference/foundation/nsmeasurement) in the Apple Foundation Framework.


## Installation

The package can be installed via [Composer](https://getcomposer.org):

	$ composer require nmarfurt/measurements


## Available Classes

### Measurement

A `Measurement` object represents a quantity and unit of measure. The `Measurement` class provides a programmatic interface to converting measurements into different units, as well as calculating the sum or difference between two measurements.
`Measurement` objects are initialized with a `Unit` object and double value. `Measurement` objects are immutable, and cannot be changed after being created.
 
### Unit

Each instance of an `Unit` subclass consists of a symbol, which can be used to create string representations of `Measurement` objects.

### Dimension

The `Dimension` subclass is an abstract subclass of `Unit` that represents a dimensional unit of measure, which can be converted into different units of the same type.
Each instance of an `Dimension`  subclass has a converter, which is used to represent the unit in terms of the dimension’s base unit provided by the `baseUnit()` method.

> Subclassing notes: `Dimension` is intended for subclassing. If you need a custom unit type to represent a derived unit, or if you need to represent dimensionless units, subclass `Unit` directly.

### UnitConverter

A `UnitConverter` describes how to convert a unit to and from the base unit of its dimension. `UnitConverterLinear` is a `UnitConverter` subclass for converting between units using a linear equation. You can define your own converters if needed.


## Available Units

The library provides concrete subclasses for many of the most common types of physical units:

| Dimension Subclass | Description | Base Unit |
| ------------------ | ----------- | --------- |
| UnitDuration       | Unit of measure for duration | seconds `sec` |
| UnitLength         | Unit of measure for length | meters `m` |


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

### Converting Measurements

_Measurement_ objects of the same dimension can be converted from one unit of measure to another.

``` php
use Measurements\Measurement;
use Measurements\Units\UnitLength;

$meters = new Measurement(4.48, UnitLength::meters());

$centimeters = $meters.convertTo(UnitLength::centimeters());
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
$jump = new UnitLength("jump", new UnitConverterLinear(1.82))
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

For example, let define units for radioactivity. The SI unit of measure for radioactivity is the becquerel (Bq).
Radioactivity is also commonly described in terms of curies (Ci), where `1 Ci = 3.7 × 1010 Bq`.

You can implement a `UnitRadioactivity` class that defines both units of radioactivity as follows:

``` php
class UnitRadioactivity extends Dimension {

	public static function becquerel()
	{
		return new UnitRadioactivity("Bq", new UnitConverterLinear(1.0));
	}

	public static function curie()
	{
		return new UnitRadioactivity("Ci", new UnitConverterLinear(3.7E10));
	}
	
	public static function baseUnit()
	{
		return static::becquerel();
	}

}
```


## Generating API Documentation

	$ phpdoc -d ./src/ -t ./doc/generated --template="xml"
	$ phpdocmd ./doc/generated/structure.xml doc/


## License

This library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
