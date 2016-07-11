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
		return new static("°", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the arc minutes unit of rotation.
	 *
	 * @return UnitAngle The arc minutes unit of rotation.
	 */
	public static function arcMinutes(): UnitAngle
	{
		return new static("ʹ", new UnitConverterLinear(0.016667));
	}

	/**
	 * Returns the arc seconds unit of rotation.
	 *
	 * @return UnitAngle The arc seconds unit of rotation.
	 */
	public static function arcSeconds(): UnitAngle
	{
		return new static("°", new UnitConverterLinear(0.00027778));
	}

	/**
	 * Returns the radians unit of rotation.
	 *
	 * @return UnitAngle The radians unit of rotation.
	 */
	public static function radians(): UnitAngle
	{
		return new static("rad", new UnitConverterLinear(57.2958));
	}

	/**
	 * Returns the gradians unit of rotation.
	 *
	 * @return UnitAngle The gradians unit of rotation.
	 */
	public static function gradians(): UnitAngle
	{
		return new static("grad", new UnitConverterLinear(0.9));
	}

	/**
	 * Returns the revolutions unit of rotation.
	 *
	 * @return UnitAngle The revolutions unit of rotation.
	 */
	public static function revolutions(): UnitAngle
	{
		return new static("rev", new UnitConverterLinear(6.28319));
	}

}
