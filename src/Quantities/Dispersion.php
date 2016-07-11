<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitDispersion;
use Measurements\Exceptions\UnitException;

/**
 * The `Dispersion` class represents a specific quantities of dispersion.
 */
class Dispersion extends Measurement {

	/**
	 * Initializes a new dispersion measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitDispersion) {
			throw new UnitException("Attempt to create a dispersion measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
