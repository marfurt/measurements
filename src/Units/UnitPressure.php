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

	const SYMBOL_NEWTONS_PER_METERS_SQUARED = "N/m²";
	const SYMBOL_GIGAPASCALS = "GPa";
	const SYMBOL_MEGAPASCALS = "MPa";
	const SYMBOL_KILOPASCALS = "kPa";
	const SYMBOL_HECTOPASCALS = "hPa";
	const SYMBOL_PASCALS = "Pa";
	const SYMBOL_INCHES_OF_MERCURY = "inHg";
	const SYMBOL_BARS = "bar";
	const SYMBOL_MILLIBARS = "mbar";
	const SYMBOL_MILLIMETERS_OF_MERCURY = "mmHg";
	const SYMBOL_POUNDS_PER_SQUARE_INCH = "psi";

	const COEFFICIENT_NEWTONS_PER_METERS_SQUARED = 1.0;
	const COEFFICIENT_GIGAPASCALS = 1E+9;
	const COEFFICIENT_MEGAPASCALS = 1E+6;
	const COEFFICIENT_KILOPASCALS = 1000.0;
	const COEFFICIENT_HECTOPASCALS = 100.0;
	const COEFFICIENT_PASCALS = 1.0;
	const COEFFICIENT_INCHES_OF_MERCURY = 3386.39;
	const COEFFICIENT_BARS = 1E+5;
	const COEFFICIENT_MILLIBARS = 100.0;
	const COEFFICIENT_MILLIMETERS_OF_MERCURY = 133.322;
	const COEFFICIENT_POUNDS_PER_SQUARE_INCH = 6894.76;

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
		return new static(static::SYMBOL_NEWTONS_PER_METERS_SQUARED, new UnitConverterLinear(static::COEFFICIENT_NEWTONS_PER_METERS_SQUARED));
	}

	/**
	 * Returns the pascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The pascals unit of pressure.
	 */
	public static function gigapascals(): UnitPressure
	{
		return new static(static::SYMBOL_GIGAPASCALS, new UnitConverterLinear(static::COEFFICIENT_GIGAPASCALS));
	}

	/**
	 * Returns the megapascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The megapascals unit of pressure.
	 */
	public static function megapascals(): UnitPressure
	{
		return new static(static::SYMBOL_MEGAPASCALS, new UnitConverterLinear(static::COEFFICIENT_MEGAPASCALS));
	}

	/**
	 * Returns the kilopascals unit of pressure.
	 *
	 * @return UnitPressure The kilopascals unit of pressure.
	 */
	public static function kilopascals(): UnitPressure
	{
		return new static(static::SYMBOL_KILOPASCALS, new UnitConverterLinear(static::COEFFICIENT_KILOPASCALS));
	}

	/**
	 * Returns the hectopascals unit of pressure.
	 *
	 * @return UnitPressure The hectopascals unit of pressure.
	 */
	public static function hectopascals(): UnitPressure
	{
		return new static(static::SYMBOL_HECTOPASCALS, new UnitConverterLinear(static::COEFFICIENT_HECTOPASCALS));
	}

	/**
	 * Returns the Pascals unit of pressure (equivalent to newtons per meter square).
	 *
	 * @return UnitPressure The Pascals unit of pressure.
	 */
	public static function pascals(): UnitPressure
	{
		return new static(static::SYMBOL_PASCALS, new UnitConverterLinear(static::COEFFICIENT_PASCALS));
	}

	/**
	 * Returns the inches of mercury unit of pressure.
	 *
	 * @return UnitPressure The inches of mercury unit of pressure.
	 */
	public static function inchesOfMercury(): UnitPressure
	{
		return new static(static::SYMBOL_INCHES_OF_MERCURY, new UnitConverterLinear(static::COEFFICIENT_INCHES_OF_MERCURY));
	}

	/**
	 * Returns the bars unit of pressure.
	 *
	 * @return UnitPressure The bars unit of pressure.
	 */
	public static function bars(): UnitPressure
	{
		return new static(static::SYMBOL_BARS, new UnitConverterLinear(static::COEFFICIENT_BARS));
	}

	/**
	 * Returns the millibars unit of pressure.
	 *
	 * @return UnitPressure The millibars unit of pressure.
	 */
	public static function millibars(): UnitPressure
	{
		return new static(static::SYMBOL_MILLIBARS, new UnitConverterLinear(static::COEFFICIENT_MILLIBARS));
	}

	/**
	 * Returns the millimeters of mercury unit of pressure.
	 *
	 * @return UnitPressure The millimeters of mercury unit of pressure.
	 */
	public static function millimetersOfMercury(): UnitPressure
	{
		return new static(static::SYMBOL_MILLIMETERS_OF_MERCURY, new UnitConverterLinear(static::COEFFICIENT_MILLIMETERS_OF_MERCURY));
	}

	/**
	 * Returns the pounds per square inch unit of pressure.
	 *
	 * @return UnitPressure The pounds per square inch unit of pressure.
	 */
	public static function poundsPerSquareInch(): UnitPressure
	{
		return new static(static::SYMBOL_POUNDS_PER_SQUARE_INCH, new UnitConverterLinear(static::COEFFICIENT_POUNDS_PER_SQUARE_INCH));
	}

}
