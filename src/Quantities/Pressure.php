<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitPressure;
use Measurements\Exceptions\UnitException;

/**
 * The `Pressure` class represents a specific quantities of pressure.
 */
class Pressure extends Measurement {

	/**
	 * Initializes a new pressure measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitPressure) {
			throw new UnitException("Attempt to create a pressure measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
