<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitFrequency;
use Measurements\Exceptions\UnitException;

/**
 * The `Frequency` class represents a specific quantities of frequency.
 *
 * @method static Frequency terahertz(float $value)
 * @method static Frequency gigahertz(float $value)
 * @method static Frequency megahertz(float $value)
 * @method static Frequency kilohertz(float $value)
 * @method static Frequency hertz(float $value)
 * @method static Frequency millihertz(float $value)
 * @method static Frequency microhertz(float $value)
 * @method static Frequency nanohertz(float $value)
 */
class Frequency extends Measurement {

	/**
	 * Initializes a new frequency measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitFrequency) {
			throw new UnitException("Attempt to create a frequency measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
