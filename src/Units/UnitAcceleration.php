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

	const SYMBOL_METERS_PER_SECONDS_SQUARED = "m/s²";
	const SYMBOL_GRAVITY = "g";

	const COEFFICIENT_METERS_PER_SECONDS_SQUARED = 1.0;
	const COEFFICIENT_GRAVITY = 9.81;

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
		return new static(static::SYMBOL_METERS_PER_SECONDS_SQUARED, new UnitConverterLinear(static::COEFFICIENT_METERS_PER_SECONDS_SQUARED));
	}

	/**
	 * Returns the gravity unit of acceleration.
	 *
	 * @return UnitAcceleration The gravity unit of acceleration.
	 */
	public static function gravity(): UnitAcceleration
	{
		return new static(static::SYMBOL_GRAVITY, new UnitConverterLinear(static::COEFFICIENT_GRAVITY));
	}

}
