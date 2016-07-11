<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitPower;
use Measurements\Exceptions\UnitException;

/**
 * The `Power` class represents a specific quantities of power.
 */
class Power extends Measurement {

	/**
	 * Initializes a new power measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitPower) {
			throw new UnitException("Attempt to create a power measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
