<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitFuelEfficiency;
use Measurements\Exceptions\UnitException;

/**
 * The `FuelEfficiency` class represents a specific quantities of fuel efficiency.
 *
 * @method static FuelEfficiency litersPer100Kilometers(float $value)
 * @method static FuelEfficiency milesPerGallon(float $value)
 * @method static FuelEfficiency milesPerImperialGallon(float $value)
 */
class FuelEfficiency extends Measurement {

	/**
	 * Initializes a new fuel efficiency measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (! $unit instanceof UnitFuelEfficiency) {
			throw new UnitException("Attempt to create a fuel efficiency measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
