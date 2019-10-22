<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Exceptions\UnitException;
use Measurements\Units\UnitElectricResistance;

/**
 * The `ElectricResistance` class represents a specific quantities of electric resistance.
 *
 * @method static ElectricResistance megaohms(float $value)
 * @method static ElectricResistance kiloohms(float $value)
 * @method static ElectricResistance ohms(float $value)
 * @method static ElectricResistance milliohms(float $value)
 * @method static ElectricResistance microohms(float $value)
 */
class ElectricResistance extends Measurement {

	/**
	 * Initializes a new electric resistance measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitElectricResistance) {
			throw new UnitException("Attempt to create a electric resistance measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
