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

	const SYMBOL_METERS_PER_SECOND = "m/s";
	const SYMBOL_KILOMETERS_PER_HOUR = "km/h";
	const SYMBOL_MILES_PER_HOUR = "mph";
	const SYMBOL_KNOTS = "kn";

	const COEFFICIENT_METERS_PER_SECOND = 1.0;
	const COEFFICIENT_KILOMETERS_PER_HOUR = 0.277778;
	const COEFFICIENT_MILES_PER_HOUR = 0.44704;
	const COEFFICIENT_KNOTS = 0.514444;

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
		return new static(static::SYMBOL_METERS_PER_SECOND, new UnitConverterLinear(static::COEFFICIENT_METERS_PER_SECOND));
	}

	/**
	 * Returns the kilometers per second unit of speed.
	 *
	 * @return UnitSpeed The kilometers per second unit of speed.
	 */
	public static function kilometersPerHour(): UnitSpeed
	{
		return new static(static::SYMBOL_KILOMETERS_PER_HOUR, new UnitConverterLinear(static::COEFFICIENT_KILOMETERS_PER_HOUR));
	}

	/**
	 * Returns the miles per hours unit of speed.
	 *
	 * @return UnitSpeed The miles per hours unit of speed.
	 */
	public static function milesPerHour(): UnitSpeed
	{
		return new static(static::SYMBOL_MILES_PER_HOUR, new UnitConverterLinear(static::COEFFICIENT_MILES_PER_HOUR));
	}

	/**
	 * Returns the knots unit of speed.
	 *
	 * @return UnitSpeed The knots unit of speed.
	 */
	public static function knots(): UnitSpeed
	{
		return new static(static::SYMBOL_KNOTS, new UnitConverterLinear(static::COEFFICIENT_KNOTS));
	}

}
