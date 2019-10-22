<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitDuration;
use Measurements\Exceptions\UnitException;

/**
 * The `Duration` class represents specific quantities of duration.
 *
 * @method static Duration seconds(float $value)
 * @method static Duration minutes(float $value)
 * @method static Duration hours(float $value)
 */
class Duration extends Measurement {

	/**
	 * Initializes a new duration measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitDuration) {
			throw new UnitException("Attempt to create a duration measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
