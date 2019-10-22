<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCurrent;
use Measurements\Exceptions\UnitException;

/**
 * The `ElectricCurrent` class represents a specific quantities of electric current.
 *
 * @method static ElectricCurrent megaamperes(float $value)
 * @method static ElectricCurrent kiloamperes(float $value)
 * @method static ElectricCurrent amperes(float $value)
 * @method static ElectricCurrent milliamperes(float $value)
 * @method static ElectricCurrent microamperes(float $value)
 */
class ElectricCurrent extends Measurement {

	/**
	 * Initializes a new electric current measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitElectricCurrent) {
			throw new UnitException("Attempt to create a electric current measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
