<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Exceptions\UnitException;

/**
 * The `Length` class represents specific quantities of length.
 *
 * @method static Length megameters(float $value)
 * @method static Length kilometers(float $value)
 * @method static Length hectometers(float $value)
 * @method static Length decameters(float $value)
 * @method static Length meters(float $value)
 * @method static Length decimeters(float $value)
 * @method static Length centimeters(float $value)
 * @method static Length millimeters(float $value)
 * @method static Length micrometers(float $value)
 * @method static Length nanometers(float $value)
 * @method static Length picometers(float $value)
 * @method static Length inches(float $value)
 * @method static Length feet(float $value)
 * @method static Length yards(float $value)
 * @method static Length miles(float $value)
 * @method static Length lightyears(float $value)
 * @method static Length nauticalMiles(float $value)
 * @method static Length fathoms(float $value)
 * @method static Length furlongs(float $value)
 * @method static Length astronomicalUnits(float $value)
 * @method static Length parsecs(float $value)
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
