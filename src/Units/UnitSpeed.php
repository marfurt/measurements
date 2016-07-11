<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitSpeed` class encapsulates units of measure for speed.
 * You typically use instances of `UnitSpeed` to represent specific quantities of speed using the `Measurement` class.
 *
 * Speed is the magnitude of velocity, or the rate of change of position.
 * Speed can be expressed by SI derived units in terms of meters per second (m/s), and is also commonly expressed in terms of kilometers per hour (km/h) and miles per hour (mph).
 *
 * The base unit of `UnitSpeed` is defined as meters per second.
 */
class UnitSpeed extends Dimension {

	/**
	 * Returns the base unit of speed, equal to meters per second.
	 *
	 * @return UnitSpeed The base unit of speed.
	 */
	public static function baseUnit()
	{
		return self::metersPerSecond();
	}

	/**
	 * Returns the meters per second unit of speed.
	 *
	 * @return UnitSpeed The meters per second unit of speed.
	 */
	public static function metersPerSecond(): UnitSpeed
	{
		return new static("m/s", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the kilometers per second unit of speed.
	 *
	 * @return UnitSpeed The kilometers per second unit of speed.
	 */
	public static function kilometersPerHour(): UnitSpeed
	{
		return new static("km/h", new UnitConverterLinear(0.277778));
	}

	/**
	 * Returns the miles per hours unit of speed.
	 *
	 * @return UnitSpeed The miles per hours unit of speed.
	 */
	public static function milesPerHour(): UnitSpeed
	{
		return new static("mph", new UnitConverterLinear(0.44704));
	}

	/**
	 * Returns the knots unit of speed.
	 *
	 * @return UnitSpeed The knots unit of speed.
	 */
	public static function knots(): UnitSpeed
	{
		return new static("kn", new UnitConverterLinear(0.514444));
	}

}
