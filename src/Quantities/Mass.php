<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitMass;
use Measurements\Exceptions\UnitException;

/**
 * The `Mass` class represents a specific quantities of mass.
 */
class Mass extends Measurement {

	/**
	 * Initializes a new mass measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitMass) {
			throw new UnitException("Attempt to create a mass measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
