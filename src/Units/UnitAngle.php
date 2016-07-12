<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitAngle` class encapsulates units of measure for rotation.
 * You typically use instances of `UnitAngle` to represent specific quantities of planar angle using the `Measurement` class.
 *
 * Angle is a quantity of rotation. The SI unit for angle is the radian (rad), which is dimensionless and defined to be the the angle subtended by an arc that is equal in length to the radius of a circle.
 * Angle is also commonly expressed in terms of degrees (°) and revolutions (rev).
 *
 * The base unit of `UnitAngle` is defined as degrees.
 */
class UnitAngle extends Dimension {

	const SYMBOL_DEGREES = "°";
	const SYMBOL_ARC_MINUTES = "ʹ";
	const SYMBOL_ARC_SECONDS = "″";
	const SYMBOL_RADIANS = "rad";
	const SYMBOL_GRADIANS = "grad";
	const SYMBOL_REVOLUTIONS = "rev";

	const COEFFICIENT_DEGREES = 1.0;
	const COEFFICIENT_ARC_MINUTES = 0.016667;
	const COEFFICIENT_ARC_SECONDS = 0.00027778;
	const COEFFICIENT_RADIANS = 57.2958;
	const COEFFICIENT_GRADIANS = 0.9;
	const COEFFICIENT_REVOLUTIONS = 6.28319;

	/**
	 * Returns the base unit of rotation, equal to degrees.
	 *
	 * @return UnitAngle The base unit of rotation.
	 */
	public static function baseUnit()
	{
		return self::degrees();
	}

	/**
	 * Returns the degrees unit of rotation.
	 *
	 * @return UnitAngle The degrees unit of rotation.
	 */
	public static function degrees(): UnitAngle
	{
		return new static(static::SYMBOL_DEGREES, new UnitConverterLinear(static::COEFFICIENT_DEGREES));
	}

	/**
	 * Returns the arc minutes unit of rotation.
	 *
	 * @return UnitAngle The arc minutes unit of rotation.
	 */
	public static function arcMinutes(): UnitAngle
	{
		return new static(static::SYMBOL_ARC_MINUTES, new UnitConverterLinear(static::COEFFICIENT_ARC_MINUTES));
	}

	/**
	 * Returns the arc seconds unit of rotation.
	 *
	 * @return UnitAngle The arc seconds unit of rotation.
	 */
	public static function arcSeconds(): UnitAngle
	{
		return new static(static::SYMBOL_ARC_SECONDS, new UnitConverterLinear(static::COEFFICIENT_ARC_SECONDS));
	}

	/**
	 * Returns the radians unit of rotation.
	 *
	 * @return UnitAngle The radians unit of rotation.
	 */
	public static function radians(): UnitAngle
	{
		return new static(static::SYMBOL_RADIANS, new UnitConverterLinear(static::COEFFICIENT_RADIANS));
	}

	/**
	 * Returns the gradians unit of rotation.
	 *
	 * @return UnitAngle The gradians unit of rotation.
	 */
	public static function gradians(): UnitAngle
	{
		return new static(static::SYMBOL_GRADIANS, new UnitConverterLinear(static::COEFFICIENT_GRADIANS));
	}

	/**
	 * Returns the revolutions unit of rotation.
	 *
	 * @return UnitAngle The revolutions unit of rotation.
	 */
	public static function revolutions(): UnitAngle
	{
		return new static(static::SYMBOL_REVOLUTIONS, new UnitConverterLinear(static::COEFFICIENT_REVOLUTIONS));
	}

}
