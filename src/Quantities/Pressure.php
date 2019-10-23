<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitPressure;
use Measurements\Exceptions\UnitException;

/**
 * The `Pressure` class represents a specific quantities of pressure.
 *
 * @method static Pressure newtonsPerMeterSquared(float $value)
 * @method static Pressure gigapascals(float $value)
 * @method static Pressure megapascals(float $value)
 * @method static Pressure kilopascals(float $value)
 * @method static Pressure hectopascals(float $value)
 * @method static Pressure pascals(float $value)
 * @method static Pressure inchesOfMercury(float $value)
 * @method static Pressure bars(float $value)
 * @method static Pressure millibars(float $value)
 * @method static Pressure millimetersOfMercury(float $value)
 * @method static Pressure poundsPerSquareInch(float $value)
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
