<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitTemperature;
use Measurements\Exceptions\UnitException;

/**
 * The `Temperature` class represents a specific quantities of temperature.
 *
 * @method static Temperature kelvin(float $value)
 * @method static Temperature celsius(float $value)
 * @method static Temperature fahrenheit(float $value)
 */
class Temperature extends Measurement {

	/**
	 * Initializes a new temperature measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (! $unit instanceof UnitTemperature) {
			throw new UnitException("Attempt to create a temperature measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
