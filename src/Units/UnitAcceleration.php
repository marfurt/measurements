<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitAcceleration` class encapsulates units of measure for acceleration.
 * You typically use instances of `UnitAcceleration` to represent specific quantities of acceleration using the `Measurement class.
 *
 * Acceleration is the rate of change of velocity. Acceleration can be expressed by SI derived units in terms of meters per second squared (m/s²).
 *
 * The base unit of `UnitAcceleration` is defined as meters per second squared.
 */
class UnitAcceleration extends Dimension {

	/**
	 * Returns the base acceleration unit, equal to metersPerSecondSquared.
	 *
	 * @return UnitAcceleration The base acceleration unit.
	 */
	public static function baseUnit()
	{
		return self::metersPerSecondSquared();
	}

	/**
	 * Returns the meter per second squared unit of acceleration.
	 *
	 * @return UnitAcceleration The meter per second squared unit of acceleration.
	 */
	public static function metersPerSecondSquared(): UnitAcceleration
	{
		return new static("m/s²", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the gravity unit of acceleration.
	 *
	 * @return UnitAcceleration The gravity unit of acceleration.
	 */
	public static function gravity(): UnitAcceleration
	{
		return new static("g", new UnitConverterLinear(9.81));
	}

}
