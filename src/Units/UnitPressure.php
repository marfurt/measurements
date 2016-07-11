<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitPressure` class encapsulates units of measure for pressure.
 * You typically use instances of `UnitPressure` to represent specific quantities of pressure using the `Measurement` class.
 *
 * Pressure is the normal force over a surface.
 * The SI unit for pressure is the pascal (Pa), which is derived as one newton of force over one square meter (1Pa = 1N / 1m2).
 *
 * The base unit of `UnitPressure` is defined as newtons per meter squared (equivalent to Pascals).
 */
class UnitPressure extends Dimension {

	/**
	 * Returns the base unit of pressure, equal to newtons per meter squared.
	 *
	 * @return UnitPressure The base unit of pressure.
	 */
	public static function baseUnit()
	{
		return self::newtonsPerMeterSquared();
	}

	/**
	 * Returns the newtons per meter square unit of pressure (equivalent to Pascals).
	 *
	 * @return UnitPressure The newtons per meter square unit of pressure.
	 */
	public static function newtonsPerMeterSquared(): UnitPressure
	{
		return new static("N/m²", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the pascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The pascals unit of pressure.
	 */
	public static function gigapascals(): UnitPressure
	{
		return new static("GPa", new UnitConverterLinear(1E+9));
	}

	/**
	 * Returns the megapascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The megapascals unit of pressure.
	 */
	public static function megapascals(): UnitPressure
	{
		return new static("MPa", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the kilopascals unit of pressure.
	 *
	 * @return UnitPressure The kilopascals unit of pressure.
	 */
	public static function kilopascals(): UnitPressure
	{
		return new static("kPa", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the hectopascals unit of pressure.
	 *
	 * @return UnitPressure The hectopascals unit of pressure.
	 */
	public static function hectopascals(): UnitPressure
	{
		return new static("hPa", new UnitConverterLinear(100.0));
	}

	/**
	 * Returns the Pascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The Pascals unit of pressure.
	 */
	public static function pascals(): UnitPressure
	{
		return new static("Pa", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the inches of mercury unit of pressure.
	 *
	 * @return UnitPressure The inches of mercury unit of pressure.
	 */
	public static function inchesOfMercury(): UnitPressure
	{
		return new static("inHg", new UnitConverterLinear(3386.39));
	}

	/**
	 * Returns the bars unit of pressure.
	 *
	 * @return UnitPressure The bars unit of pressure.
	 */
	public static function bars(): UnitPressure
	{
		return new static("bar", new UnitConverterLinear(100000));
	}

	/**
	 * Returns the millibars unit of pressure.
	 *
	 * @return UnitPressure The millibars unit of pressure.
	 */
	public static function millibars(): UnitPressure
	{
		return new static("mbar", new UnitConverterLinear(100));
	}

	/**
	 * Returns the millimeters of mercury unit of pressure.
	 *
	 * @return UnitPressure The millimeters of mercury unit of pressure.
	 */
	public static function millimetersOfMercury(): UnitPressure
	{
		return new static("mmHg", new UnitConverterLinear(133.322));
	}

	/**
	 * Returns the pounds per square inch unit of pressure.
	 *
	 * @return UnitPressure The pounds per square inch unit of pressure.
	 */
	public static function poundsPerSquareInch(): UnitPressure
	{
		return new static("psi", new UnitConverterLinear(6894.76));
	}

}
