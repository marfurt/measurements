<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Exceptions\UnitException;
use Measurements\Units\UnitElectricPotentialDifference;

/**
 * The `ElectricPotentialDifference` class represents a specific quantities of electric potential difference.
 *
 * @method static ElectricPotentialDifference megavolts(float $value)
 * @method static ElectricPotentialDifference kilovolts(float $value)
 * @method static ElectricPotentialDifference volts(float $value)
 * @method static ElectricPotentialDifference millivolts(float $value)
 * @method static ElectricPotentialDifference microvolts(float $value)
 */
class ElectricPotentialDifference extends Measurement {

	/**
	 * Initializes a new electric potential difference measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitElectricPotentialDifference) {
			throw new UnitException("Attempt to create a electric potential difference measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
