<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitEnergy;
use Measurements\Exceptions\UnitException;

/**
 * The `Energy` class represents a specific quantities of energy.
 *
 * @method static Energy kilojoules(float $value)
 * @method static Energy joules(float $value)
 * @method static Energy kilocalories(float $value)
 * @method static Energy calories(float $value)
 * @method static Energy kilowattHours(float $value)
 */
class Energy extends Measurement {

	/**
	 * Initializes a new energy measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitEnergy) {
			throw new UnitException("Attempt to create an energy measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
