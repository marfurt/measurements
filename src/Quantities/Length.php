<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Exceptions\UnitException;

/**
 * The `Length` class represents specific quantities of length.
 */
class Length extends Measurement {

	/**
	 * Initializes a new length measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitLength) {
			throw new UnitException("Attempt to create a length measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
