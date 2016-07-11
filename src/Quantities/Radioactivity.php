<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitRadioactivity;
use Measurements\Exceptions\UnitException;

/**
 * The `Radioactivity` class represents a specific quantities of radioactivity.
 */
class Radioactivity extends Measurement {

	/**
	 * Initializes a new radioactivity measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitRadioactivity) {
			throw new UnitException("Attempt to create a radioactivity measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
